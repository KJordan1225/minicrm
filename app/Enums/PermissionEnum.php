<?php

namespace App\Enums;

enum PermissionEnum: string
{
    case MANAGE_USERS = 'manage_users';
    case DELETE_CLIENTS = 'delete_clients';
    case DELETE_PROJECTS = 'delete_projects';
    case DELETE_TASKS = 'delete_tasks';
    case DELETE_DOCUMENTS = 'delete_documents';
    
    case ADD_DOCUMENTS = 'add_documents';
}
