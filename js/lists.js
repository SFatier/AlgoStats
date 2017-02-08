function list_triee(size){
	var list = new Array;
	for (var i = 0; i < size; i++)
		list[i] = i;
	return list;
}
function list_invert(size){
	var list = new Array;
	for (var i = 0; i < size; i++)
		list[i] = size - i;
	return list;
}
function list_random(size){
	var list = new Array;
	for (var i = 0; i < size; i++)
		list[i] = Math.floor(Math.random() * size)
	return list;
}
function list_quasi(size){
	var list = new Array;
	for (var i = 0; i < size; i++)
		list[i] = Math.floor(Math.random() * size)
	return list;
}
function list_doubl(size){
	var list = new Array;
	var temp = new Array;
	for (var i = 0; i < size; i++)
		temp[i] = Math.floor(Math.random() * (size/2))
	for (var i = 0; i < size; i++)
		list[i] = Math.floor(Math.random() * size)
	return list;
}
function list_moyenne(size){
	var list = new Array;
	for (var i = 0; i < size; i++)
		list[i] = Math.floor(Math.random()  * size)
	return list;
}
