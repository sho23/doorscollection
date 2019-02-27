<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Entrance;
use DB;
use Image;

class CreateThumbnailCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:createTmb';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $filenames = DB::table('entrances')->pluck('img_url');
        foreach ($filenames as $filename) {
            $img = Image::make(public_path('storage/img/' . $filename))->orientate();
            if ($img->height() > $img->width()) {
                $height = 500;
                $width = null;
            } else {
                $height = null;
                $width = 500;
            }
            $img->resize($height, $width, function ($constraint) {
              $constraint->aspectRatio();
            });

            $img->crop(500, 500);
            $img->save(public_path('storage/img/500/500x500_' . $filename));
            $img->resize(150, 150);
            $img->save(public_path('storage/img/150/150x150_' . $filename));
        }
    }
}
