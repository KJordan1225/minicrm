<style>
.menu {
    list-style: none;
    margin: 0;
    padding: 0;
    display: flex;
}

.menu-item {
    position: relative;
}

.menu-item a {
    color: #4B006E;
    text-decoration: none;
    padding: 10px 15px;
    display: block;
}

.menu-item a:hover {
    background-color: transparent;
}

/* Dropdown Menu Styles */
.dropdown-menu1 {
    position: absolute;
    top: 100%;
    left: 0;
    background-color: transparent;
    list-style: none;
    margin: 0;
    padding: 0;
    display: none; /* Hidden by default */
    min-width: 150px;
}

.dropdown-menu li a {
    color: white;
    padding: 10px 15px;
    text-decoration: none;
    display: block;
}


.dropdown-menu li a:hover {
    background-color: transparent;
}

/* Show dropdown on hover */
.dropdown1:hover .dropdown-menu1 {
    display: block;
}


/* Style the button to look like a link */
.link-button {
    background: none;
    border: none;
    color: #CFB53B;
    text-decoration: none;
    cursor: pointer;
    font-family: inherit; /* Match the font to surrounding text */
    font-size: inherit; /* Match the size to surrounding text */
    padding: 25px; /* Remove extra padding */

}

/* Add hover effect */
.link-button:hover {
    color: #CFB53B;
    text-decoration: none;
}

</style>


<ul class="menu">
	<li class="menu-item dropdown1">
		<a href="#" class="dropdown-toggle">Members</a>
		<ul class="dropdown-menu1">
			<li><a href="{{ route('loggedInProfile.edit') }}">Profile</a></li>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <li><button type="submit" class="link-button">LOGOUT</button></li>
            </form>
		</ul>
	</li>
</ul>