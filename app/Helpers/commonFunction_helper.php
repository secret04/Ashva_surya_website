<?php
use App\Controllers\BaseController;
use App\Models\Admin\BranchModel;

if (!function_exists('convertDMYYY')) {
    function convertDMYYY(string $date)
    {
        $date = new DateTime($date);
        return $date->format('d-m-Y');
    }
}

if (!function_exists('limitCharstitle')) {
    function limitCharstitle(string $string)
    {
        return (strlen($string) > 25) ? substr($string,0,25).'...' : $string;
    }
}

if (!function_exists('limitCharsdescription')) {
    function limitCharsdescription(string $string)
    {
        return (strlen($string) > 90) ? substr($string,0,90).'...' : $string;
    }
}

// if (!function_exists('getBranchNamesByBranchId')) {
//     function getBranchNamesByBranchId($news)
//     {
//         $BranchModel = new BranchModel();
//         foreach($news as $key => $new) {
//             $branchesList = array();
//             $branchIds = (isset($new->branches)) ? json_decode($new->branches) : null;
           
//             if(!is_null($branchIds)) {
//                 foreach($branchIds as $branch) {
//                     $branches = $BranchModel->getBranchDetailsById($branch);
//                     array_push($branchesList, $branches->branch_name);
//                }
//             }

//             $news[$key]['branchesName'] = $branchesList;
          
//             unset($branchesList,$branches);
//        }
//        return $news;
//     }
// }
// if (!function_exists('getBranchNamesByBranchId')) {
//     function getBranchNamesByBranchId($events)
//     {
//         $BranchModel = new BranchModel();
//         foreach($events as $key => $e) {
//             $branchesList = array();
//             $branchIds = (isset($e->branches)) ? json_decode($e->branches) : null;
           
//             if(!is_null($branchIds)) {
//                 foreach($branchIds as $branch) {
//                     $branches = $BranchModel->getBranchDetailsById($branch);
//                     array_push($branchesList, $branches->branch_name);
//                }
//             }

//             $news[$key]['branchesName'] = $branchesList;
          
//             unset($branchesList,$branches);
//        }
//        return $events;
//     }
// }


// if (!function_exists('getBranchNamesForNewsIdByBranchId')) {
//     function getBranchNamesForNewsIdByBranchId($news)
//     {
//         $BranchModel = new BranchModel();
//         $branchesList = array();
//         $branchIds = (isset($news->branches)) ? json_decode($news->branches) : null;
        
//         if(!is_null($branchIds)) {
//             foreach($branchIds as $branch) {
//                 $branches = $BranchModel->getBranchDetailsById($branch);
//                 array_push($branchesList, $branches->branch_name);
//             }
//             $news->branchesName = $branchesList;
//         }
       
//        return $news;
//     }
// }

// if (!function_exists('getBranchNamesForEventsIdByBranchId')) {
//     function getBranchNamesForEventsIdByBranchId($events)
//     {
//         $BranchModel = new BranchModel();
//         $branchesList = array();
//         $branchIds = (isset($events->branches)) ? json_decode($events->branches) : null;
        
//         if(!is_null($branchIds)) {
//             foreach($branchIds as $branch) {
//                 $branches = $BranchModel->getBranchDetailsById($branch);
//                 array_push($branchesList, $branches->branch_name);
//             }
//             $events->branchesName = $branchesList;
//         }
       
//        return $events;
//     }
// }