<h4>Form</h4>


<form action="user1submit"  method="DELETE">
    {{method_field('DELETE')}}
@csrf
<input type="text" name="user" placeholder="name"><br>
<input type="password" name="password" placeholder="password"><br>

<button type="submit">login</button>





</form>