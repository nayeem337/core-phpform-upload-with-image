<?php


namespace App\classes;


class FileUpload
{
    public $name, $email, $phone, $image;

    public $imageName, $imageDirectory;
    public function __construct($post, $file)
    {
        $this->name = $post['name'];
        $this->email = $post['email'];
        $this->phone = $post['phone'];

        $this->image = $file['image'];
    }

    public function index ()
    {
         $this->imageName = $this->image['name'];
         $this->imageDirectory = 'assets/img/upload/'.$this->imageName;
         move_uploaded_file($this->image['tmp_name'], $this->imageDirectory);
         return 'success';
    }
}