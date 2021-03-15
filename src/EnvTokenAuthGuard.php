<?php
namespace MarkDomkan\EnvTokenAuth;

use Illuminate\Auth\GuardHelpers;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Http\Request;

class EnvTokenAuthGuard implements Guard
{
    use GuardHelpers;

    /**
     * The request instance.
     *
     * @var \Illuminate\Http\Request
     */
    protected $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function user()
    {
        if (! is_null($this->user)) {
            return $this->user;
        }
        return null;
    }


    public function check(): bool {
        return $this->validate();
    }

    public function validate(array $credentials = [])
    {
        return env('AUTH_TOKEN') == $this->request->header('Authorization');
    }
}
