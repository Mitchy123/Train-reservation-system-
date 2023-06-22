<style>

.topnav {
  background-color:blue;
  overflow: hidden;
}
.topnav a {
  float: left;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}
.topnav a:hover {
  background-color: white;
  color: black;
}
.topnav a.active {
  background-color: green;
  color: white;
}





ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  width: 25%;
  background-color: white;
  position: fixed;
  height: 100%;
  overflow: auto;
}

li a {
  display: block;
  color: black;
  padding: 8px 16px;
  text-decoration: none;
}

li a.active {
  background-color: green;
  color: white;
}

li a:hover:not(.active) {
  background-color:black;
  color: white;
}

/*Styling admin page*/
.rightpane{
    width: available;
    height: available;
    position: relative;
    margin-left: 26%;
    background-color: grey;
    border-collapse: collapse;
 
}
</style>