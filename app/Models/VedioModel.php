<?php namespace App\Models;
use CodeIgniter\Model;

class VideoModel extends Model
{
    protected $table = 'videos';
    protected $primaryKey = 'id';
    protected $allowedFields = ['video_data', 'metadata'];

    // Method to save video data in the database
    public function saveVideo($videoData, $metadata)
    {
        $data = [
            'video_data' => $videoData,
            'metadata' => $metadata
        ];

        return $this->insert($data);
    }

    // Method to fetch video data from the database
    public function getVideo($videoId)
    {
        return $this->find($videoId);
    }
}
