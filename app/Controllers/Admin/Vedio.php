<?php

namespace App\Controllers\Admin;

use App\Models\VideoModel;

class Video extends BaseController
{
    public function saveVideo()
    {
        // Handle the video upload and retrieve video data
        
        $videoData = $_FILES['video']['tmp_name']; // Example, assuming 'video' is the name of the input field
        $metadata = [
            'title' => $_POST['title'], // Example, assuming 'title' is the name of the input field
            // Additional metadata fields as needed
        ];
        
        $videoModel = new VideoModel();
        $videoId = $videoModel->saveVideo($videoData, json_encode($metadata));

        // Redirect or return a response as needed
    }

    public function getVideo($videoId)
    {
        $videoModel = new VideoModel();
        $video = $videoModel->getVideo($videoId);
        print_r($videoId);
        exit;
        // Process and display the video data in the frontend view
        // For example, pass the video data to the view
        return view('admin/dashboard', $video);
    }
}