<?php
if (isset($_POST['tasklist'])) {
    $task_list = $_POST['tasklist'];
} else {
    $task_list = array();

    // some hard-coded starting values to make testing easier
    $task_list[] = 'Write chapter';
    $task_list[] = 'Edit chapter';
    $task_list[] = 'Proofread chapter';
}

$errors = array();

switch( $_POST['action'] ) {
    case 'Add Task':
        $new_task = $_POST['newtask'];
        if (empty($new_task)) {
            $errors[] = 'The new task cannot be empty.';
        } else {
            array_push($task_list, $new_task);
        }
        break;
    case 'Delete Task':
        $task_index = $_POST['taskid'];
        unset($task_list[$task_index]);
        $task_list = array_values($task_list);
        break;
/*
    case 'Modify Task':
    
    case 'Save Changes':
    
    case 'Cancel Changes':
    
    case 'Promote Task':
        
    case 'Sort Tasks':
    
*/
    case 'Modify Task':
        $task_index = $_POST['taskid'];
        $modify_task = $task_list[$task_index];
        
        break;
    
    case 'Save Changes':
        $modifiedid = $_POST['modifiedtaskid'];
        $modified_task = $_POST['modifiedtask'];
        
        if( empty($modified_task) ){
            $errors[] = 'You cannot leave the modified task field blank.';
        } else {
            $task_list[$modifiedid] = $modified_task;
            $modified_task = '';
        }
        break;
        
    case 'Cancel Changes':
        $modified_task = '';
        
        break;
    
    case 'Promote Task':
       $task_index = $_POST['taskid'];
        
        if( $task_index == 0 ){
            $errors[] = 'You can\'t promote the first task';
        } else {
            $task_num = $task_list[$task_index];
            $last_task_num = $task_list[$task_index-1];
            
            $task_list[$task_index-1] = $task_num;
            $task_list[$task_index] = $last_task_num;
            
        }
        
        break;
        
    case 'Sort Tasks':
        
        sort($task_list);
        
        break;
        
}


include('task_list.php');
?>