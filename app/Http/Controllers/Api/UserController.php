<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserCollection;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class UserController extends Controller
{
    public function index()
    {
        $users = User::paginate(10);
        return response()
            ->json(new UserCollection($users));
    }
    public function show(User $user){
        try {
            response()
                ->json(new UserResource(User::findOrFail($user)))
                ->setStatusCode(201);
        } catch (ModelNotFoundException $exception){
            return response()->json([
                'error' => 'not found'
            ])
                ->setStatusCode(404);
        }
        catch (\Exception $exception){
            return response()->json([
                'error' => 'something went wrong'
            ])
                ->setStatusCode(500);
        }


       return response()->json(new UserResource($user))
           ->setStatusCode(201);
    }
}
