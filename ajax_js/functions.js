// JavaScript Document.
function stringifyList(data)
{
	//var data=document.getElementById(field);
	string = new Array(); 
	for (var i = 0; i < data.options.length; i++) 
	if (data.options[i]){string.push(data.options[i].value);}
	
	return string;
}

function stringifyListName(data)
{
	//var data=document.getElementById(field);
	string = new Array(); 
	for (var i = 0; i < data.options.length; i++) 
	if (data.options[i]){string.push(data.options[i].text);}
	
	return string;
}

function doPost(url,params,area)
{
	//var datas="";
	$().ready(function() 
	{
		$.ajax
		({  
			type: "POST",  
			url: url, 
			data: params,  
			success: function(data) {$(area).empty().append(data);}
		});
	});
	//return "false";
}