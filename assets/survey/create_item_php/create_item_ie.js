
var selectValue = "";
var selectClick = document.getElementById("title__selectItem").addEventListener('click', function () {
  selectValue = document.getElementById("title__selectItem").value;
});

var selectItem = document.getElementById("title__selectItem").onchange = function () {
  var select_type = document.getElementById("title__selectItem").value;
  var select_opt = document.getElementById("title__selectItem");
  var row = document.querySelectorAll(".row");
  if (row.length > 0) {
    if (confirm("문항 종류를 변경시 항목이 다 사라집니다.")) {
      // 항목을 지워주자. ie11이라 foreach가 안된다.
      if (select_type !== "null" || row.length > 0) {
        for (var i = 0; i < row.length; i++) {
          row[i].parentNode.removeChild(row[i]);
        }
      }
    }
    else {
      for (var i = 0; i < select_opt.length; i++) {
        select_opt[i].removeAttribute('selected');
        if (select_opt[i].value === selectValue) {
          select_opt[i].selected = true;
        }
      }
    }
    return;
  }
};

// 생성 누를경우
var createItem = document.getElementById('createItem');
createItem.addEventListener('click', function (e) {
  var row = document.querySelectorAll(".row");
  var title = document.getElementById("title").value;
  var select_type = document.getElementById("title__selectItem").value;
  if (select_type === "null") {
    alert("문항 종류를 선택해주세요");
    return;
  }

  if (select_type === "textbox") {
    if (row.length > 0) {
      alert("서술형은 하나만 생성이 가능합니다.");
      return;
    }
  }
  // row 생성
  var node = document.createElement("div");
  node.classList.add("row");
  document.getElementById("table").appendChild(node);
  Add_Cell(select_type);

  var fileSelect = document.getElementsByClassName("test");
  var row = document.querySelectorAll(".row");
  var fileElem = document.getElementById("test" + row.length);

  fileSelect[row.length - 1].addEventListener('click', function () {
    fileElem.click();
  });

  fileElem.onchange = function () {
    var ofiles = document.getElementById("test" + row.length).files;
    file_name = ofiles[0].name;
    console.log("change: " + file_name);
    var span = document.createElement("span");
    span.classList.add("filename");
    document.querySelector(".row:last-child .cell:first-child").appendChild(span);
    var t = document.createTextNode(file_name);
    document.querySelector(".row:last-child .cell:first-child .filename").appendChild(t);
    var filenameWidth = getFileName_Width(file_name.length) + 25;
    document.querySelector(".row:last-child .cell:first-child").style.minWidth = filenameWidth + "px";
    document.querySelector(".row:last-child .cell:first-child").style.Width = filenameWidth + "px";
  }
});

// 파일 업로드 할시 글자 길이 계산
function getFileName_Width(fileLength) {
  var hap = 0;
  for (var i = 0; i < fileLength; i++) {
    hap += 8;
  }
  return hap;
}

function Add_Cell(attr) {
  // attr 생성
  var cell = document.createElement("div");
  cell.classList.add("cell");
  if (attr === "file") {
    var cell = document.createElement("div");
    cell.classList.add("cell");
    document.querySelector(".row:last-child").appendChild(cell);
    var input = document.createElement("img");
    input.setAttribute('src', "https://secure.webtoolhub.com/static/resources/icons/set72/6ff8345b.png");
    input.setAttribute('class', 'test');
    document.querySelector(".row:last-child .cell:last-child").appendChild(input);
  }

  // 서술형일경우
  if (attr === "textbox") {
    var input = document.createElement("textarea");
    document.querySelector(".row:last-child").appendChild(input);
  } else {
    document.querySelector(".row:last-child").appendChild(cell);
    var input = document.createElement("input");
    input.setAttribute('type', attr);
    if (attr === "file") {
      input.style.display = 'none';
      var row = document.querySelectorAll(".row");
      input.setAttribute('id', 'test' + row.length);
    }

    document.querySelector(".row:last-child .cell").appendChild(input);

    // textbox 생성
    var cell = document.createElement("div");
    cell.classList.add("cell");
    document.querySelector(".row:last-child").appendChild(cell);
    var input = document.createElement("input");
    input.setAttribute('type', "textbox");
    document.querySelector(".row:last-child .cell:last-child").appendChild(input);

    // cancel img 생성
    var cell = document.createElement("div");
    cell.classList.add("cell");
    document.querySelector(".row:last-child").appendChild(cell);
    var input = document.createElement("img");
    input.setAttribute('src', "https://img.icons8.com/all/500/cancel.png");
    document.querySelector(".row:last-child .cell:last-child").appendChild(input);

    // upload img 생성
    var cell = document.createElement("div");
    cell.classList.add("cell");
    document.querySelector(".row:last-child").appendChild(cell);
    var input = document.createElement("img");
    input.setAttribute('src', "data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAMgAAADICAMAAACahl6sAAAAh1BMVEX///8BAQEYGBjv7+8MDAwICAjn5+fT09MQEBD7+/vr6+t4eHjz8/OsrKyoqKggICDa2tocHBzKysp/f3/CwsKVlZVKSko1NTVhYWG8vLxvb2/h4eHFxcWioqJFRUWMjIxRUVEmJiY4ODiQkJCzs7NOTk5GRkYvLy9ZWVmFhYVmZmabm5tzc3N0MOQXAAAEr0lEQVR4nO3ca0OyMBQHcBBRIQxvea285FOWff/P95imIjvbcJ7d7PzfNjZ+GsIOjCCgUCgUCoVCoVAoFMrdpv1gew9w0g7Du5DsHHch2TvuQPLr8F5ycnguKTi8llw4PJaUHN5KGIenEsDhpQR0eCjhOLyTcB2eSQQOryRCh0cSicMbidThiaSCwwtJJYcHkooO5yWVHY5LrnA4LbnK4bDkSoezkqsdjkoUHE5KlBwOShQdzkmUHY5JbnDwJVGnqSuJDgcsGYy7t3UqTKbFAUg6rxi7yw8Macc3d1ySTFoIOysKCEFwlCQ9jB6FgSAojgtJlqP0KAoAQXIUJX2kHgVhIWiOsyTTfYCEAATRcZI8InbJSxmC6jhKxqh9wsm0On4lH8idQsn0Og4SA4fIJUSDYy/R0CuTImRdj4Xh9SHeKu4bh0iS8vpIZVsShCAEIQhBCIIPqbcwYxHSqD40bu4GEhGEIHpCEIJoCkEIoikEUYE05u+1MGyt+h08wDEGIdH0XHvazDAR+96NQXoXt1NabVSGQchzvdTyxU/IjC0VD7yEALd/8yvmf85AJlDbuYeQf1Db3D9IBhf9e95BBnDjJ+8gL3Djb+8gW7jxl3cQzjeC+QhYZgTyDDdWPEZ60L6ZgXB+tZpKjjSHji0zkGABtV0qOYJhGAOjGIKAZ/Y3JcdnCP5KGIJAp/Yl74lFYfYfSczOzExBGrVyy1jpvP7bz9gaJOiVr+MfVRzJ8Sqa+Z0wBgmay2K71kTFETwct1/YgwTZw3mSOFartqzPA5X/MQ1CdpcR20Uex93hXLH0UJxmvpf/mHAi7VUBIkgyl88Xk1VxJLSZMiok2YQj6f/A9GKkldpIbDAhyc9p5kOybflB8rXSUGwQIdn7fttcWIDslOtJI7X9ZoIHyY4nh67gKjJjn6FEqvGhQaLzMdzin+2/2LHUrnGYYEHS4kdd550nwakZTrESCdK4/JeJ4UO4CU5ocpSvBAcyW1b5mDOm1SEoZRgUSAdY8QDs3QYeLKxhVF0xIB1wXdNnudkTxwE0tQNpMpOUQ0rVFcGCm64TEGaKcspX8SiOBAtuWi5ABuVTdSGbggQsgDsEmQgcYTg8HcZzUbO6fchasvZgFR3acerfzkDkaygOl/WpeL2mdQinGHyR5axQbHAUwqnOl7K7rJetrLMMeavk2J24pQ3tQj4rOiqkAGnv88hEHwRzIWZ87pb36yG9QlaFfCM6bEKm8Ha+QRLkZZi2IAlvYuEZJAFvXPkHyYbYDjuQTMMLImxAohW8hW+QdKTBYQHS0LRq3DSELV/5CYHKVz5C4PKVfxBe+QojJiH88hVCDEKetb4cwhxEXL66OcYgsvLVrTEF0fIKkGIMQfS/lscMpFr56qYYgfDvz+DlvJv6IE91AzEBMRyCEERTCEIQTSHInUM6ka0gQ9wLQVwLQVwLQVwLQVwLQVzL34GYeAMzQuTPoWq5S4ufVykE9XElfZG/6qNnexcrpS5dgvazHNuDVFmhzazecjCLCg79d6Nuz7Di+pKBxvvOCIn7lZcupVOHv5TNVa+USLfjUV5zLflovLVXmKJQKBQKhUKhUCiUP5b/7N9qmnuc868AAAAASUVORK5CYII=");
    document.querySelector(".row:last-child .cell:last-child").appendChild(input);
  }
};