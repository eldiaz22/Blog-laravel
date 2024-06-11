@props(["type" => "info"])
@php
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

@endphp
<div class="p-4 mb-4 text-sm  {{$class}} role="alert">
<span class="font-medium">{{$title ?? "Inf alert!!"}}</span> {{$slot}}
