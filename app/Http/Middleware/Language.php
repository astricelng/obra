<?php

namespace App\Http\Middleware;

use Closure;

class Language
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $lang = $request->segment(1);
        
        if (!array_key_exists($lang, config('languages.locales')) || $lang == null)
        {
            $segments = $request->segments();
    
            $lang = config('app.locale');
            $segments = array_prepend($segments, $lang);
            
            return redirect()->to(implode('/', $segments));
        }
    
        return $next($request);
    }
}
