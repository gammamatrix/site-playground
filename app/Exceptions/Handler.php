<?php
namespace App\Exceptions;

use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * The list of the inputs that are never flashed to the session on validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     */
    public function register(): void
    {
        // $this->reportable(function (Throwable $e) {
        //
        // });
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Symfony\Component\HttpFoundation\Response
     *
     * @throws Throwable
     */
    public function render($request, Throwable $e)
    {
        // dd([
        //     '__METHOD__' => __METHOD__,
        //     '$e' => $e,
        // ]);
        if ($e instanceof AuthorizationException && Auth::guest()) {
            if ($this->shouldReturnJson($request, $e)) {
                if (config('app.debug')) {
                    Log::debug('response()->json()', ['$message' => $e->getMessage()]);
                }

                return response()->json(['message' => $e->getMessage()], 401);
            }

            $redirect = config('playground-auth.redirect');
            // dd([
            //     '__METHOD__' => __METHOD__,
            //     '$e' => $e,
            // ]);
            if (config('app.debug')) {
                Log::debug('redirect()->guest($redirect)', [
                    '$redirect' => $redirect,
                    '$message' => $e->getMessage(),
                    'Route::has($redirect)' => $redirect && is_string($redirect) && Route::has($redirect),
                ]);
            }
            if (is_string($redirect) && Route::has($redirect)) {
                return redirect()->guest($redirect);
            }
        }

        Log::debug([
            '__METHOD__' => __METHOD__,
            '__FILE__' => __FILE__,
            '__LINE__' => __LINE__,
            '$e' => $e->__toString(),
            '\Auth::user()' => \Auth::user()?->toArray(),
        ]);

        return parent::render($request, $e);
    }
}
