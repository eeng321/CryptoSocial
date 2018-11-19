<?php 

namespace App\Repositories;

interface RepositoryInterface
{
    public function all();
    public function create(array $info);
    public function getbyid($id);
    public function update(array $info, $id);
    public function delete($id);
}