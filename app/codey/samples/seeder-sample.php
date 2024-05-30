<!-- example seeder file -->
<?php
namespace Seeder;

defined('ROOTPATH') OR exit('Access Denied!');
/**
 * Seeder class
 */
class Sample
{
    use MainSeeder;

    public function index()
    {
        $data = [
            'username' => 'admin',
            'password' => password_hash('admin', PASSWORD_DEFAULT),
            'email' => '',
            'role' => 'admin',
            'status' => 1,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ];

        $this->db->insert('users', $data);
    }

}

?>

<!-- example seeder file -->