<?php

function getUsers(){
    return json_decode(file_get_contents(__DIR__ . '/users.json') ,true);
}

function getUsersById($id){
    $users = getUsers();
    foreach ($users as $user){
        if ($user['id']== $id){
            return $user;
        }
}
return null;
}

function createUser($data)
{
    $users = getUsers ();
    $data['id'] = rand (1000000, 20000000);
    $users[] = $data;
    putJson($users);
    return $data;
}
function updateUser($data , $id){
    $users = getUsers();
    foreach ($users as $i => $user){
        if ($user['id'] == $id){
            $users[$i] = $updateUser = array_merge ($user ,$data);
        }
    }
    putJson ($users);
        return $updateUser;
}

function deleteUser($id){
    $users = getUsers ();
    foreach ($users as $i =>$user){
        if ($user['id'] == $id){
          array_splice($users ,$i ,1);
        }
        putJson ($users);
    }
}

function putJson($users){
    file_put_contents (__DIR__.'/users.json' ,json_encode ($users) ,JSON_PRETTY_PRINT);
}