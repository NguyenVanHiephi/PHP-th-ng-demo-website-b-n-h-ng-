

var minus = document.getElementsByClassName("minus");
var plus = document.getElementsByClassName("plus");
var value = document.getElementById("quantity_value");

// Lặp qua các phần tử i và thêm lắng nghe sự kiện click
for (var i = 0; i < minus.length; i++) {
    minus[i].addEventListener("click", function () {
    // Lấy phần tử span tương ứng
    var spanElement = value;

    // Lấy giá trị hiện tại và chuyển đổi thành số
    var currentValue = parseInt(spanElement.textContent);

    // Tăng giá trị lên 1
    var newValue = currentValue - 1;
    if (newValue < 1) {
        newValue = 1;
      }

    // Gán giá trị mới cho thuộc tính textContent
    spanElement.textContent = newValue;
  });
}

// Lặp qua các phần tử i và thêm lắng nghe sự kiện click
for (var i = 0; i < plus.length; i++) {
    plus[i].addEventListener("click", function () {
    // Lấy phần tử span tương ứng
    var spanElement = value;

    // Lấy giá trị hiện tại và chuyển đổi thành số
    var currentValue = parseInt(spanElement.textContent);

    // Tăng giá trị lên 1
    var newValue = currentValue + 1;

    // Gán giá trị mới cho thuộc tính textContent
    spanElement.textContent = newValue;
  });
}