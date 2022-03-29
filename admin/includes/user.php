<?php
class User extends Db_object {

    protected static $db_table = 'users';
    protected static $db_table_fields = array('username', 'password', 'first_name', 'last_name', 'user_image');
    public $id;
    public $username;
    public $password;
    public $first_name;
    public $last_name;
    public $user_image;
    public $upload_directory = 'images';
    public $image_placeholder = 'http://placehold.it/400x400&text=image';
    public $errors = array();
    public $upload_errors_array = array(
        UPLOAD_ERR_OK         => 'There is no error',
        UPLOAD_ERR_INI_SIZE   => 'The uploaded file exceeds the upload_max_filesize',
        UPLOAD_ERR_FORM_SIZE  => 'The uploaded file exceeds the MAX_FILE_SIZE',
        UPLOAD_ERR_PARTIAL    => 'The uploaded file was only partially uploaded.',
        UPLOAD_ERR_NO_FILE    => 'No file was uploaded.',
        UPLOAD_ERR_NO_TMP_DIR => 'Missing a temporary folder.',
        UPLOAD_ERR_CANT_WRITE => 'Failed to write file to disk.',
        UPLOAD_ERR_EXTENSION  => 'A PHP file extension stopped the file upload.'
    );



    public function upload_photo() {
            if (!empty($this->errors)) {
                return false;
            }
            if (empty($this->user_image) || empty($this->tmp_path)) {
                $this->errors[] = 'The file was not available ! ';
                return false;
            }

            $target_path = SITE_ROOT . DS . 'admin' . DS . $this->upload_directory . DS . $this->user_image;

            if (file_exists($target_path)) {
                $this->errors[] = "The file {$this->user_image} already exists ! ";
                return false;
            }

            if (move_uploaded_file($this->tmp_path, $target_path)) {
                unset($this->tmp_path);
                return true;
            } else {
                $this->errors[] = 'The file directory probabely does not have permission ! ';
                return false; 
            }
    }

    public function image_path_and_placeholder() {
        return empty($this->user_image) ? ($this->image_placeholder) :  ($this->upload_directory . DS . $this->user_image);
    }

    public static function verify_user($username, $password) {
        global $database;
        $username = $database->escape_string($username);
        $password = $database->escape_string($password);

        $sql = "SELECT * FROM ".static::$db_table." WHERE ";
        $sql .= "username = '{$username}' ";
        $sql .= "AND password = '{$password}' ";
        $sql .= "LIMIT 1";

        $the_result_array = static::find_by_query($sql);
        
        return !empty($the_result_array) ? array_shift($the_result_array) : false;

    }    
} // End of class User
?>