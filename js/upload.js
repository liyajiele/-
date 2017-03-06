		//封装
		//原型链：javascript中所有的对象，继承都来自原型.
		//        多个对象的原型组成的链
		//原型：object.prototype
        
        //1、上传的内容
        //2、上传的地址
        
        function upload(url,inputobj,progressobj,imgobj){
        	var inputobj=inputobj||{};     //判断对象，有还是空，以至于不报错
        	if(inputobj.nodeName=="INPUT"){         //判断
        		this.inputobj=inputobj;
        	}else if(typeof inputobj=="string"){
        		this.inputobj=document.querySelector(inputobj);
        	}
        	
        	var progressobj=progressobj||{};     //判断对象，有还是空，以至于不报错
        	if(progressobj.nodeName=="DIV"){         //判断
        		this.progressobj=progressobj;
        	}else if(typeof progressobj=="string"){
        		this.progressobj=document.querySelector(progressobj);
        	}
        	
        	var imgobj=imgobj||{};     //判断对象，有还是空，以至于不报错
        	if(imgobj.nodeName=="IMG"){         //判断
        		this.imgobj=imgobj;
        	}else if(typeof imgobj=="string"){
        		this.imgobj=document.querySelector(imgobj);
        	}
        	
        	this.type=["jpeg","jpg","gif","png","zip"];   //类型
        	this.size=1024*1024*20;     //长度
        	this.uploadName="file";
        	this.url=url;
        	this.loadstart=function(){};     //上传之前
        }
        upload.prototype={
        	up:function(callback){
        		if(this.url){
        			this.callback=callback;
        			this.getcon();
        			
        		}else{
        			alert("指定路径");
        		}

        	},
        	getcon:function(){
//      		this.inputobj.onchange=()=>{     //this指下面的obj；箭头函数；第一种方法
//      			console.log(this);
//      		}
                var that=this;
                this.inputobj.onchange=function(){     //this指input;第二种方法
                	that.data=this.files[0]; 
                	var read=new FileReader();    //读取文件
                	read.readAsDataURL(that.data);   //把数据读成地址，本身位2进制
                	read.onload=function(e){
                		that.imgobj.src=e.target.result;    //读成的一个结果
                		
                	}	

        			if(that.check()){
        				that.upfile();
        			}      //检查在选中文件之后
                	
                }
        	},
        	check:function(){
        		var that=this;
//      		console.log(that.data);
                var data=that.data;
                var size=data.size;
                var extname=data.name.substr(data.name.lastIndexOf(".")+1).toLowerCase();
//              console.log(extname);     //上传文件的后缀名
                if(size>that.size){
                	alert("文件太大！");
                	return false;
                }
                var flag=false;
                for(var i=0;i<that.type.length;i++){
                	if(that.type[i]==extname){    //
                		flag=true;
                		break;                 
                	}
                }
                if(!flag){
                	alert("格式不符合");
                	return false;
                }
                return true;
        	},
        	upfile:function(){
        		var that=this;
        		var ajax=new XMLHttpRequest();
        		var form=new FormData();
                form.append(this.uploadName,this.data);
                ajax.upload.onloadstart=function(){
                	that.loadstart();
                }
                
                ajax.upload.onprogress=function(e){
                	var total=e.total;
                	var loaded=e.loaded;
                	var scale=loaded/total*100;
                	that.progressobj.style.width=scale+"%";
//              	console.log(scale)
                }
                
                ajax.onload=function(){
                	that.callback(ajax.response);
                }
                ajax.open("post",that.url);
                ajax.send(form);
        	}
       }
		