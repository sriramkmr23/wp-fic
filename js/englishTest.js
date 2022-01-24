function NavitasSELTCalculator(q, a) {
    var n = "NONE";
    if (a !== undefined) {
        n = a.toUpperCase()
    }
    var t = this;
    var p = document.getElementById(q);
    var x = "nelc";
    var C = "https://www.gov.uk/government/uploads/system/uploads/attachment_data/file/441721/2015-07-03_-_Approved_Secure_English_Language_Tests_and_Test_Centres_v5.0.pdf";
    var m = [{
        name: "Cambridge English or (ESOL)"
    }, {
        name: "Cambridge International Examinations"
    }, {
        name: "Educational Testing Service (ETS)"
    }, {
        name: "GCSE, WAEC, etc"
    }, {
        name: "IELTS Consortium"
    }, {
        name: "Trinity College London"
    }];
    var l = [{
        name: "TOEIC",
        providers: [m[2]],
        levels: "A1,A2,B1,B2,C1",
        valid: "2 Years",
        keydate: 0,
        before: 2,
        after: 2
    }, {
        name: "TOEIC iBT Test",
        providers: [m[2]],
        levels: "A1,B1,B2,C1",
        valid: "2 Years",
        keydate: 0,
        before: 2,
        after: 2
    }, {
        name: "BULATS Online (certificated)",
        providers: [m[0]],
        levels: "A1,A2,B1,B2,C1,C2",
        valid: "2 Years",
        keydate: 0,
        before: 4,
        after: 4
    }, {
        name: "Integrated Skills in English",
        providers: [m[5]],
        levels: "A2,B1,B2,C1,C2",
        valid: "No Expiry",
        keydate: 0,
        before: 1,
        after: 4
    }, {
        name: "Level 1 Certificate in ESOL Skills for Life",
        providers: [m[5]],
        levels: "B2",
        valid: "No Expiry",
        keydate: 0,
        before: 1,
        after: 4
    }, {
        name: "Level 2 Certificate in ESOL Skills for Life",
        providers: [m[5]],
        levels: "C1",
        valid: "No Expiry",
        keydate: 0,
        before: 1,
        after: 4
    }, {
        name: "Cambridge IGCSE - English as First Language",
        providers: [m[1]],
        levels: "B1,B2",
        valid: "No Expiry",
        keydate: 0,
        before: 1,
        after: 4
    }, {
        name: "Cambridge IGCSE - English as Second Language",
        providers: [m[1]],
        levels: "A2,B1,B2",
        valid: "No Expiry",
        keydate: 0,
        before: 1,
        after: 4
    }, {
        name: "IELTS",
        providers: [m[4]],
        levels: "A1,A2,B1,B2,C1,C2",
        valid: "2 Years",
        keydate: 1,
        before: 1,
        after: 4
    }, {
        name: "IELTS for UKVI",
        providers: [m[4]],
        levels: "A1,A2,B1,B2,C1,C2",
        valid: "2 Years",
        keydate: 0,
        before: 0,
        after: 3
    }, {
        name: "Non SELT",
        providers: [m[3]],
        levels: "B2",
        valid: "No Expiry",
        keydate: 0,
        before: 4,
        after: 4
    }];
    var i = [{
        bu: "HIC",
        level: ["PS", "UG NQF 3", "UG NQF 6", "PG NQF 6", "PG NQF 7"],
        outcomes: [
            [0, 0, 0, 0, 0],
            [2, 2, 2, 2, 2],
            [1, 1, 1, 1, 1],
            [2, 2, 1, 1, 1],
            [1, 1, 2, 1, 2]
        ]
    }, {
        bu: "ICWS",
        level: ["PS", "UG NQF 3", "UG NQF 6", "", "PG NQF 7"],
        outcomes: [
            [0, 0, 0, 0, 0],
            [2, 2, 2, 0, 2],
            [1, 1, 1, 0, 1],
            [2, 2, 1, 0, 1],
            [1, 1, 2, 0, 2]
        ]
    }, {
        bu: "CRIC",
        level: ["PS", "", "UG NQF 6", "", "PG NQF 7"],
        outcomes: [
            [0, 0, 0, 0, 0],
            [2, 0, 2, 0, 2],
            [1, 0, 1, 0, 1],
            [2, 0, 1, 0, 1],
            [1, 0, 2, 0, 2]
        ]
    }, {
        bu: "LBIC",
        level: ["PS", "", "UG NQF 6", "", "PG NQF 7"],
        outcomes: [
            [0, 0, 0, 0, 0],
            [2, 0, 2, 0, 2],
            [1, 0, 1, 0, 1],
            [2, 0, 1, 0, 1],
            [1, 0, 2, 0, 2]
        ]
    }, {
        bu: "ICP",
        level: ["PS", "", "UG NQF 6", "", "PG NQF 7"],
        outcomes: [
            [0, 0, 0, 0, 0],
            [2, 0, 2, 0, 2],
            [1, 0, 1, 0, 1],
            [2, 0, 1, 0, 1],
            [1, 0, 2, 0, 2]
        ]
    }, {
        bu: "PUIC",
        level: ["PS", "", "UG NQF 6", "", "PG NQF 7"],
        outcomes: [
            [0, 0, 0, 0, 0],
            [2, 0, 2, 0, 2],
            [1, 0, 1, 0, 1],
            [2, 0, 1, 0, 1],
            [1, 0, 2, 0, 2]
        ]
    }, {
        bu: "BCUIC",
        level: ["PS", "", "UG NQF 6", "", "PG NQF 7"],
        outcomes: [
            [0, 0, 0, 0, 0],
            [2, 0, 2, 0, 2],
            [1, 0, 1, 0, 1],
            [2, 0, 1, 0, 1],
            [1, 0, 2, 0, 2]
        ]
    }, {
        bu: "EIC",
        level: ["PS", "", "UG NQF 10", "", "PG NQF 11"],
        outcomes: [
            [0, 0, 0, 0, 0],
            [2, 0, 2, 0, 2],
            [1, 0, 1, 0, 1],
            [2, 0, 1, 0, 1],
            [1, 0, 2, 0, 2]
        ]
    }, {
        bu: "ICRGU",
        level: ["PS", "", "UG NQF 10", "", "PG NQF 11"],
        outcomes: [
            [0, 0, 0, 0, 0],
            [2, 0, 2, 0, 2],
            [1, 0, 1, 0, 1],
            [2, 0, 1, 0, 1],
            [1, 0, 2, 0, 2]
        ]
    }, {
        bu: "UNIC",
        level: ["PS", "", "UG NQF 6", "", "PG NQF 7"],
        outcomes: [
            [0, 0, 0, 0, 0],
            [2, 0, 2, 0, 2],
            [1, 0, 1, 0, 1],
            [2, 0, 1, 0, 1],
            [1, 0, 2, 0, 2]
        ]
    }];
    var o = [new Date("2015-04-05"), new Date("2015-04-23")];
    var h = [{
        description: "Invalid",
        text: "We are sorry but the date you entered is not valid for the test you selected. Please review the test and date values entered and try again."
    }, {
        description: "All",
        text: "Based on the information provided your English Language Certificate makes you eligible to apply to any of the UK Colleges for any level of study. Please note that after the 5th November 2015 this English Language Certificate will no longer be valid for entry onto a Presessional English Course you will need an IELTS for UKVI certificate which can be booked at <a target='_blank' href='http://takeielts.britishcouncil.org/ielts-ukvi/book-ielts-ukvi'>http://takeielts.britishcouncil.org/ielts-ukvi/book-ielts-ukvi</a>"
    }, {
        description: "N",
        text: "Unfortunately, based on the information provided your English Language Certificate is no longer valid for study in the UK."
    }, {
        description: "PS and NQF 3 Only",
        text: "Based on the information provided your English Language Certificate makes you eligible to apply to any of the UK Colleges for any level of study."
    }, {
        description: "UG NQF 6 and PG NQF7",
        text: "Based on the information provided you will be able to study at Under Graduate (NQF 6) or Post Graduate (NQF 7) levels at any of the UK Colleges. You will not be able to study on a Presessional English Course."
    }];
    var u = null;
    var b = null;
    var c = null;
    var d = null;
    var v = null;
    var w = null;
    A();
    s();

    function A() {
        var D = f();
        var H = f();
        var J = f();
        var G = f();
        var I = f();
        var F = f();
        var E = "<div id='dqb'><table>";
        E += "<tr class='calc'><td colspan='2' class='st'>What English Certificate do you have?</td></tr>";
        E += "<tr class='calc'><td>Test</td><td colspan='2'><select class='calcSelect' id='" + D + "'></select></td></tr>";
        E += "<tr class='calc'><td>Provider</td><td colspan='2'><select class='calcSelect' id='" + H + "'></select></td></tr>";
        E += "<tr class='calc'><td>Date of Exam</td><td><input type='text' class='calcInputText' id='" + J + "' maxlength='10'></td><td>Format:dd/mm/yyyy</tr>";
        E += "</table><div id='" + G + "' style='display:none;'><hr/><div class='st'>Your Results:</div>";
        E += "<div id='" + I + "' class='re'></div>";
        E += "<div id='" + F + "' class='re'/>";
        E += "</div></div>";
        p.innerHTML = E;
        u = document.getElementById(D);
        j(u, z);
        b = document.getElementById(H);
        j(b, g);
        c = document.getElementById(J);
        if (typeof $ !== "undefined") {
            $(c).datepicker({
                dateFormat: "dd/mm/yy"
            });
            $(c).change(function() {
                e()
            })
        }
        j(c, e);
        if (c.addEventListener) {
            c.addEventListener("keydown", function(K) {
                if (!(/^[0-9]*$/i).test(K.value) && K.value != "/") {
                    K.value = null
                }
            }, false)
        } else {
            c.attachEvent("onkeyup", function(M) {
                var O = c.value;
                var K = "";
                for (var L = 0; L < O.length && L < 10; L++) {
                    var N = O.charAt(L);
                    if ((/^[0-9]*$/i).test(N) || N == "/") {
                        K += N
                    }
                }
                c.value = K
            })
        }
        d = document.getElementById(G);
        v = document.getElementById(I);
        w = document.getElementById(F);
        return
    }

    function j(E, D) {
        if (E.addEventListener) {
            E.addEventListener("change", D, false)
        } else {
            E.attachEvent("onclick", D);
            E.attachEvent("onkeyup", D)
        }
    }

    function s() {
        var E = "";
        for (var D = 0; D < l.length; D++) {
            var F = document.createElement("option");
            F.innerHTML = l[D].name;
            F.value = D;
            u.appendChild(F)
        }
        if (l.length > 1) {
            u.selectedIndex = -1;
            u.focus()
        } else {
            z()
        }
    }

    function z() {
        b.innerHTML = "";
        b.style.display = "block";
        if (u.value === undefined || u.selectedIndex < 0) {
            return
        }
        var D = l[u.value];
        var F = "";
        for (var E = 0; E < D.providers.length; E++) {
            var G = document.createElement("option");
            G.innerHTML = D.providers[E].name;
            G.value = E;
            b.appendChild(G)
        }
        if (D.providers.length > 1) {
            b.selectedIndex = -1;
            b.focus()
        } else {
            g()
        }
    }

    function g() {
        c.style.display = "block";
        b.disabled = (b.length < 2);
        e()
    }

    function e() {
        k()
    }

    function k() {
        d.style.display = "none";
        if (u.selectedIndex == -1) {
            u.focus();
            return
        }
        var E = B();
        if (E == null) {
            c.focus();
            return
        }
        var D = l[parseInt(u.value)];
        var F = D.before;
        var G = o[D.keydate];
        if (E > G) {
            F = D.after
        }
        y(F)
    }

    function B() {
        var D = c.value;
        if (D.length != 10) {
            return (null)
        }
        var F = D.split("/");
        if (F.length != 3) {
            return (null)
        }
        try {
            return (new Date(parseInt(F[2]), parseInt(F[1]) - 1, parseInt(F[0]), 0, 0, 0, 0))
        } catch (E) {
            return (null)
        }
    }

    function y(I) {
        d.style.display = "inline-block";
        v.innerHTML = h[I].text;
        v.innerHTML += "<br/><br/><table style='width:100%'><tr class='calc'><td id='tdTableLink'></td><td style='text-align:right'><a href='" + C + "' target='_blank'>Approved SELT Test Centres</a></td></tr></table>";
        if (n == "NONE") {
            return
        }
        var J = i[0].level.length;
        var H = J + 1;
        var D = "<table id='tbRG' style='display:none'><tr class='calc' style='font-weight:bold;'><td class='tdRGC tdRGL'>BU</td><td class='tdRGC tdRGL' colspan=" + J + ">Level of study offered at BU</td></tr>";
        for (var G = 0; G < i.length; G++) {
            D += "<tr>";
            D += "<td class='tdRGC tdRGL'>" + i[G].bu + "</td>";
            for (var F = 0; F < i[G].level.length; F++) {
                var E = "tdRGC tdRGD ";
                E += r(i[G].outcomes[I][F]);
                D += "<td class='" + E + "'>" + i[G].level[F] + "</td>"
            }
            D += "</tr>"
        }
        D += "</table>";
        w.innerHTML = D;
        if (n == "LINK") {
            hideCalculatorResultsTable()
        } else {
            showCalculatorResultsTable()
        }
    }

    function r(D) {
        if (D == 2) {
            return ("clsYes")
        } else {
            if (D == 1) {
                return ("clsNo")
            } else {
                return ("clsDis")
            }
        }
    }

    function f() {
        return (x + Math.random().toString(36).slice(2))
    }
}

function showCalculatorResultsTable() {
    document.getElementById("tdTableLink").innerHTML = "<a href='javascript:hideCalculatorResultsTable()'>&lt;&lt; Hide Table</a>";
    document.getElementById("tbRG").style.display = "block";
    tableOption = "YES"
}

function hideCalculatorResultsTable() {
    document.getElementById("tdTableLink").innerHTML = "<a href='javascript:showCalculatorResultsTable()'>Show Table &gt;&gt;</a>";
    document.getElementById("tbRG").style.display = "none";
    tableOption = "LINK"
};
