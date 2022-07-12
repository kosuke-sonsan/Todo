<?php declare(strict_types=1);

namespace App\Repository;

use App\Models\User;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Http\Request;

final class LaravelAuthenticatedUser implements AuthenticatedUser
{
    public function __construct(private Request $request)
    {
    }

    /**
     * @return User
     * @throws AuthorizationException
     */
    public function user(): User
    {
        $user = $this->request->user();

        if ($user === null) {
            throw new AuthorizationException('ログインしてください。');
        }

        return $user;
    }

    /**
     * @return int
     * @throws AuthorizationException
     */
    public function id(): int
    {
        $id = $this->request->user()?->id;

        if ($id === null) {
            throw new AuthorizationException('ログインしてください。');
        }

        return $id;
    }
}