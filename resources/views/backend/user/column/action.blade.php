<div class="dropdown">
    <button class="btn btn-light btn-active-light-primary btn-flex btn-center btn-sm " type="button" id="actionsDropdown"
        data-bs-toggle="dropdown" aria-expanded="false">
        Actions <i class="ki-duotone ki-down fs-5 ms-1"></i>
    </button>
    <ul class="dropdown-menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
        aria-labelledby="actionsDropdown">
        <li class="menu-item px-3">
            <a class="dropdown-item menu-link px-3" href="avascript:void(0);">Edit</a>
        </li>
        <li class="menu-item px-3">
            <a class="dropdown-item menu-link px-3" id="deleteUser" data-user-id="{{ $query->id }}">Delete</a>
        </li>
    </ul>
</div>
