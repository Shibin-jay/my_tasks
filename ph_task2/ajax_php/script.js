function loadCars() {
    // console.log('hi');
  var xhr = new XMLHttpRequest();
  xhr.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      var cars = JSON.parse(this.responseText);
      var table = "<table>";
      table +=
        "<tr><th>Name</th><th>Brand</th><th>Year</th><th>Description</th><th>Image</th></tr>";
      for (var i = 0; i < cars.length; i++) {
        table += "<tr>";
        table += "<td>" + cars[i].name + "</td>";
        table += "<td>" + cars[i].brand + "</td>";
        table += "<td>" + cars[i].year + "</td>";
        table += "<td>" + cars[i].description + "</td>";
        table +=
          "<td><img src='" +
          cars[i].image +
          "' width='200px' height='200px' style='object-fit: contain;'></td>";
        table += "</tr>";
      }
      table += "</table>";
      document.getElementById("carList").innerHTML = table;
    }
  };
  xhr.open("GET", "cars.php");
  xhr.send();
}
