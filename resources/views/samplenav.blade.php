@if(isset($name))
	<ul>
		<li>Welcome {{ $name }}</li>
		<li>Logout</li>
	<ul></ul>
@else
	<ul>
		<li>Login</li>
		<li>Register</li>
	</ul>

@endif