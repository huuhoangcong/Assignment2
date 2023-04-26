function generateFields() {
	// Lấy giá trị được nhập vào
	var numFields = document.getElementById("numFields").value;
	var container = document.getElementById("inputContainer");
	
	// Xóa các ô input cũ
	container.innerHTML = "";
	
	// Tạo các ô input mới dựa trên giá trị được nhập vào
	for (var i = 0; i < numFields; i++) {
		var input = document.createElement("input");
		input.type = "text";
		input.name = "input" + i;
		container.appendChild(input);
	}
}
