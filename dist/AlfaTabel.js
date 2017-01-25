/*
AlfaTable JQuery Plugin v1.0a
Merupakan Plugin JQuery untuk membuat Table dari Data JSON.
masih dalam tahap Pengembangan, dan bertujuan untuk bisa mudah dalam mengolah
data, terutama dalam Bentuk Table.
===========GUE===========
    Nick: dfto(Newbiezier)
    Team: G.H.O.S.T Team
    Family: Devel Team in M.C.T(Minang Cyber Team)
=========================
*/
(function($){
    "use strict";
    $.fn.AlfaTabel = function(a){
        //Pengaturan Dengan Nilai Default
        var b = {
            Data:[],
            Cuma:[],
            Kecuali:[],
            Attrib:[]
        };
        $.extend(b,a);
        var t = function(){
            $.each(b.Data[0],
                function(i,v){
                    b.Cuma.push(i);
                }
            );
            return b.Cuma;
        }
        //Mengambil tbody element Dari Object DOM
        var ObjGue = this.find('tbody');
        //Fungsi Untuk Membuat Table Dari Data yg Ada
        var ToTabel = function(){
            var d = b.Data;
            var c = (b.Cuma.length == 0)?t():b.Cuma;
            var k = b.Kecuali;
            var o = '';
            var x;
            var w = 0;
            $.each(d, function(i,v) {
                o += '<tr>';
                for(x in c){
                    var z = c[x];
                    var r = z.match(/\[[0-9]+\]/i);
                    var q = z.match(/(\[[0-9]+\])/i);
                    var s = z.match(/[0-9]+/i);
                    if(r == z){
                        if(s >= w){
                            w = s;
                        }
                        var y = w++;
                    }else{
                        var y = v[z]
                    }
                    o += '<td>'+y+'</td>';
                }
                o += '</tr>';
            });
            return o;
        }
        //Lempar Keluaaaaarrrr..., wkwkwk
        $(ObjGue).html(ToTabel());
    }
})(jQuery);
