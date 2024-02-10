<div class="dropdown">
    <button class="btn btn-light btn-active-light-primary btn-flex btn-center btn-sm " type="button" id="actionsDropdown"
        data-bs-toggle="dropdown" aria-expanded="false">
        Actions <i class="ki-duotone ki-down fs-5 ms-1"></i>
    </button>
    <ul class="dropdown-menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
        aria-labelledby="actionsDropdown">

        @can('delete-role')
            <li class="menu-item px-3">
                <a href="{{ route('role.edit', $query->id) }}" class="dropdown-item menu-link px-3" id="edit-user">Edit</a>
            </li>
        @endcan

        @can('delete-role')
            <li class="menu-item px-3">
                <a class="dropdown-item menu-link px-3" id="deleteRole" data-role-id="{{ $query->id }}">Delete</a>
            </li>
        @endcan
    </ul>
</div>
