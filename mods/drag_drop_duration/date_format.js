Date.prototype.getMonthName=function(){return["January","February","March","April","May","June","July","August","September","October","November","December"][this.getMonth()]},Date.prototype.getMonthAbbr=function(){return["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"][this.getMonth()]},Date.prototype.getDayFull=function(){return["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"][this.getDay()]},Date.prototype.getDayAbbr=function(){return["Sun","Mon","Tue","Wed","Thur","Fri","Sat"][this.getDay()]},Date.prototype.getDayOfYear=function(){var t=new Date(this.getFullYear(),0,1);return Math.ceil((this-t)/864e5)},Date.prototype.getDaySuffix=function(){var t=["th","st","nd","rd"],e=this.getDate()%100;return t[(e-20)%10]||t[e]||t[0]},Date.prototype.getWeekOfYear=function(){var t=new Date(this.getFullYear(),0,1);return Math.ceil(((this-t)/864e5+t.getDay()+1)/7)},Date.prototype.isLeapYear=function(){var t=this.getFullYear();if(parseInt(t)%4==0){if(parseInt(t)%100==0){if(parseInt(t)%400!=0)return!1;if(parseInt(t)%400==0)return!0}if(parseInt(t)%100!=0)return!0}if(parseInt(t)%4!=0)return!1},Date.prototype.getMonthDayCount=function(){return[31,this.isLeapYear()?29:28,31,30,31,30,31,31,30,31,30,31][this.getMonth()]},Date.prototype.format=function(t){t=t.split("");for(var e=this.getDate(),r=this.getMonth(),a=this.getHours(),n=this.getMinutes(),i=this.getSeconds(),u={d:e<10?"0"+e:e,D:this.getDayAbbr(),j:this.getDate(),l:this.getDayFull(),S:this.getDaySuffix(),w:this.getDay(),z:this.getDayOfYear(),W:this.getWeekOfYear(),F:this.getMonthName(),m:r<10?"0"+(r+1):r+1,M:this.getMonthAbbr(),n:r+1,t:this.getMonthDayCount(),L:this.isLeapYear()?"1":"0",Y:this.getFullYear(),y:this.getFullYear()+"".substring(2,4),a:12<a?"pm":"am",A:12<a?"PM":"AM",g:0<a%12?a%12:12,G:0<a?a:"12",h:0<a%12?a%12:12,H:a<10?"0"+a:a,i:n<10?"0"+n:n,s:i<10?"0"+i:i},o="",s=0;s<t.length;s++){var h=t[s];h.match(/[a-zA-Z]/g)?o+=u[h]?u[h]:"":o+=h}return o};