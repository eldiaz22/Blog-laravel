<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class alert2 extends Component
{
    public  $class;
    /**
     * Create a new component instance.
     */
    public function __construct($type = "info")
    {
        switch($type){
            case "info":
                $class = "text-blue-800 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400";
            break;
            case "danger":
                $class = "text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400";

            break; 
            case "warnig":
                $class = "text-yellow-800 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400";

            break;
            case "dark":
                $class = "text-grey-800 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400";

            break;
            case "success":
                $class = "text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400";
            break;

        default:
            $class = "text-blue-800 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400";

            break;
    }
    $this->class = $class;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.alert2');
    }
}
