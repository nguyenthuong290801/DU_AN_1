<?php

namespace Illuminate\framework\factory;

class Model
{    public static function create($modelClassName, $data)
    {

        $fullClassName = 'App\models\\' . $modelClassName;
        $model = new $fullClassName();
        $model->create($data);

        return $model;
    }


    public static function update($modelClassName, $id, array $data)
    {

        $fullClassName = 'App\models\\' . $modelClassName;
        $model = new $fullClassName();
        $model->update($id, $data);

        return $model;
    }

    public static function delete($modelClassName, $id)
    {

        $fullClassName = 'App\models\\' . $modelClassName;
        $model = new $fullClassName();
        $model->delete($id);

        return $model;
    }

    public static function softDelete($modelClassName, $id)
    {

        $fullClassName = 'App\models\\' . $modelClassName;
        $model = new $fullClassName();
        $model->softDelete($id);

        return $model;
    }

    public static function restore($modelClassName, $id)
    {

        $fullClassName = 'App\models\\' . $modelClassName;
        $model = new $fullClassName();
        $model->restore($id);

        return $model;
    }

    public static function find($modelClassName, $id)
    {

        $fullClassName = 'App\models\\' . $modelClassName;
        $model = new $fullClassName();
        
        return $model->find($id);
    }

    public static function where($modelClassName, $conditions)
    {

        $fullClassName = 'App\models\\' . $modelClassName;
        $model = new $fullClassName();

        return $model->where($conditions);
    }

    public static function findSlug($modelClassName, $id)
    {

        $fullClassName = 'App\models\\' . $modelClassName;
        $model = new $fullClassName();
        
        return $model->findSlug($id);
    }

    public static function findCmt($modelClassName, $id)
    {

        $fullClassName = 'App\models\\' . $modelClassName;
        $model = new $fullClassName();
        
        return $model->findCmt($id);
    }

    public static function withTrashed($modelClassName)
    {

        $fullClassName = 'App\models\\' . $modelClassName;
        $model = new $fullClassName();
    
        return $model->withTrashed();
    }

    public static function all($modelClassName)
    {

        $fullClassName = 'App\models\\' . $modelClassName;
        $model = new $fullClassName();
    
        return $model->all();
    }

    public static function paginateWithTrashed($modelClassName, $page, $perPage)
    {

        $fullClassName = 'App\models\\' . $modelClassName;
        $model = new $fullClassName();
    
        return $model->paginateWithTrashed($page, $perPage);
    }

    public static function paginate($modelClassName, $page, $perPage)
    {

        $fullClassName = 'App\models\\' . $modelClassName;
        $model = new $fullClassName();
    
        return $model->paginate($page, $perPage);
    }

    public static function login($modelClassName, $email, $passowrd)
    {

        $fullClassName = 'App\models\\' . $modelClassName;
        $model = new $fullClassName();
    
        return $model->login($email, $passowrd);
    }
}
