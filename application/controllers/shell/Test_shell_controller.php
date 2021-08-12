<?php
    class Test_shell_controller extends CI_Controller{
        public function __construct(){
            parent::__construct();
            $this->load->helper('url');
        }

        public function index(){
            echo shell_exec('php index.php api get');
        }

        public function test(){
            file_put_contents( 'progress.txt', '' );
            if(is_file(base_url('assets/progress.txt'))){ unlink(APPPATH."../project/assets/progress.txt"); }
            if(is_file(base_url('assets/testfile.iso'))){ unlink(APPPATH."../project/assets/testfile.iso"); }
            $targetFile = fopen( 'testfile.iso', 'w' );
            $ch = curl_init( 'https://speed.hetzner.de/100MB.bin' );
            curl_setopt( $ch, CURLOPT_PROGRESSFUNCTION, function($resource, $download_size, $downloaded_size, $upload_size, $uploaded_size) {
                    static $previousProgress = 0;
                    
                    if ( $download_size == 0 )
                        $progress = 0;
                    else
                        $progress = round( $downloaded_size * 100 / $download_size );
                    
                    if ( $progress > $previousProgress)
                    {
                        $previousProgress = $progress;
                        $fp = fopen( 'progress.txt', 'a' );
                        fputs( $fp, "$progress\n" );
                        fclose( $fp );
                    }
                } );
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt( $ch, CURLOPT_NOPROGRESS, false );

            curl_setopt( $ch, CURLOPT_FILE, $targetFile );
            curl_exec( $ch );
            fclose( $targetFile );
        }
        public function progressCallback ($resource, $download_size, $downloaded_size, $upload_size, $uploaded_size)
        {
            static $previousProgress = 0;
            
            if ( $download_size == 0 )
                $progress = 0;
            else
                $progress = round( $downloaded_size * 100 / $download_size );
            
            if ( $progress > $previousProgress)
            {
                $previousProgress = $progress;
                $fp = fopen( 'progress.txt', 'a' );
                fputs( $fp, "$progress\n" );
                fclose( $fp );
            }
        }
    }