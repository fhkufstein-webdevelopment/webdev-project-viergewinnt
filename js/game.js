/*
VierGewinnt JavaScript Version
 */
var totalRows = 6;
var cellsInRow = 6;
var spFarbe = "0";
var aiFarbe = "0";
var container = document.getElementById('gamecontainer');
var anzZuege = 0;
var gameOver = false;
var clickbar = true;


/**
 * Spieler bekommt die ausgewählte Farbe zugeteilt, der Computer-Gegner bekommt die andere Farbe
 * @param farbe
 */
function farbAuswahl(farbe) {
    spFarbe = farbe;
    let startButton = $("#startGameButton");
    if (farbe === "yellow") {
        aiFarbe = "red";
        startButton.removeClass("btn-danger");
        startButton.addClass("btn-warning");
    } else {
        startButton.removeClass("btn-warning");
        startButton.addClass("btn-danger");
        aiFarbe = "yellow";
    }
}

function startButton() {
    $("#preStartContainer").remove();
    $('#gamerow').append('<div id="gamecontainer" class="col-md-8 col-sm-12"></div>');
    drawTable(totalRows, cellsInRow);
}

/**
 * zeichnet das Spielfeld in der Größe der Parameter
 * gibt jedem Feld die onClick Function drawClick()
 * @param rows
 * @param cols
 */
function drawTable(rows, cols) {
    var div1 = document.getElementById('gamecontainer');
    var tbl = document.createElement("table");
    tbl.id = "game-table";

    for (var r = 0; r < rows; r++) {
        var row = document.createElement("tr");
        row.className = "game-row";

        for (var c = 0; c < cols; c++) {
            var cell = document.createElement("td");
            cell.className = "game-col";
            cellid = r + '' + c;
            cell.setAttribute('row', r);
            cell.setAttribute('col', c);
            cell.id = cellid;
            cell.onclick = function () {
                if (!gameOver) {
                    drawClick(this.id);
                }
            };
            row.appendChild(cell);
        }
        tbl.appendChild(row);
    }
    div1.appendChild(tbl);
}

/**
 * definiert das Feld in das geclickt wurde und ruft die drawCircle Function auf.
 * ruft aiZug() auf --> der Computergegner ist nach dem Spieler an der Reihe
 * @param feld
 */
function drawClick(feld) {
    let clickFeld = document.getElementById(feld);
    let col = clickFeld.getAttribute("col");
    let row = clickFeld.getAttribute("row");
    drawCircle(col, row, spFarbe);
    aiZug();
}

/**
 * ruft die drawCircle() Function mit random Werten auf --> Zug von Computergegner
 */
function aiZug() {
    if (!gameOver) drawCircle(randomInt(cellsInRow), randomInt(totalRows), aiFarbe);
}

function randomInt(max) {
    return Math.floor(Math.random() * Math.floor(max));
}

/**
 * Zeichnet einen Circle am Boden in die Row, die ausgewählt wurde.
 * @param col
 * @param row
 * @param color
 */
function drawCircle(col, row, color) {
    let firstField = document.querySelector('[col="' + col + '"][row="' + 0 + '"]');
    if (!firstField.hasAttribute("color")) {
        for (let iFeld = totalRows - 1; iFeld >= 0; iFeld--) {
            if (!document.querySelector('[col="' + col + '"][row="' + iFeld + '"]').hasAttribute("color")) {
                let circle = document.createElement('div');
                circle.className = "kreis";
                circle.style.backgroundColor = color;
                document.querySelector('[col="' + col + '"][row="' + iFeld + '"]').appendChild(circle);
                document.querySelector('[col="' + col + '"][row="' + iFeld + '"]').setAttribute("color", color);
                anzZuege++;
                if (anzZuege >= 7) {
                    checkIfWon(parseInt(col), iFeld, color);
                }
                break;
            }
        }
    }
}

/**
 * Checkt ob gewonnen wurde
 * @param col
 * @param row
 * @param color
 */
function checkIfWon(col, row, color) {
    if (!gameOver) checkSenkrecht(col, row, color);

    if (!gameOver) checkDiagonal(col, row, color);

    if (!gameOver) checkDiagonalLinks(col, row, color);

    if (!gameOver) checkWaagrecht(col, row, color);

}

/**
 * checkt von oben nach unten ob 4 Circles die gleiche Farbe besitzen
 * @param col
 * @param row
 * @param color
 */
function checkSenkrecht(col, row, color) {
    if (row <= totalRows - 4) {
        for (let i = 1; i < 4; i++) {
            let newRow = (row + i);
            if (document.querySelector('[col="' + col + '"][row="' + newRow + '"]').getAttribute("color") !== color) {
                i = 1;
                break;
            } else {
                if (i === 3) {
                    gameOver = true;
                    gameWon(anzZuege, color);
                    break;
                }
            }
        }
    }
}

/**
 * geht zuerst von dem letzten geclickten Feld schräg nach links oben, prüft anschließend ob nach rechts unten 4 felder gleich sind
 * @param col
 * @param row
 * @param color
 */
function checkDiagonal(col, row, color) {

    if (row >= 1 && col >= 1) {
        while (document.querySelector('[col="' + (col - 1) + '"][row="' + (row - 1) + '"]')) {
            if (document.querySelector('[col="' + (col - 1) + '"][row="' + (row - 1) + '"]').getAttribute("color") === color) {
                col--;
                row--;
            } else {
                break;
            }
        }
    }
    if (col <= cellsInRow - 4 && row <= totalRows - 4) {
        for (let i = 1; i < 4; i++) {
            let newCol = (col + i);
            let newRow = (row + i);
            if (document.querySelector('[col="' + newCol + '"][row="' + newRow + '"]').getAttribute("color") !== color) {
                i = 1;
                break;
            } else {
                if (i === 3) {
                    gameOver = true;
                    gameWon(anzZuege, color);
                    break;
                }
            }
        }
    }
}

/**
 * geht zuerst von dem letzten geclickten Feld schräg nach links unten, prüft anschließend ob nach rechts oben 4 felder gleich sind
 * @param col
 * @param row
 * @param color
 */
function checkDiagonalLinks(col, row, color) {
    if (row <= totalRows - 2 && col >= 1) {
        while (document.querySelector('[col="' + (col - 1) + '"][row="' + (row + 1) + '"]')) {
            if (document.querySelector('[col="' + (col - 1) + '"][row="' + (row + 1) + '"]').getAttribute("color") === color) {
                col--;
                row++;
            } else {
                break;
            }
        }
    }
    if (row >= 4 && col <= cellsInRow - 4) {
        for (let i = 1; i < 4; i++) {
            let newCol = (col + i);
            let newRow = (row - i);
            if (document.querySelector('[col="' + newCol + '"][row="' + newRow + '"]').getAttribute("color") !== color) {
                i = 1;
                break;
            } else {
                if (i === 3) {
                    gameOver = true;
                    gameWon(anzZuege, color);
                    break;
                }
            }
        }
    }
}

/**
 * geht zuerst von dem letzten geclickten Feld nach links, prüft anschließend ob nach rechts 4 felder gleich sind
 * @param col
 * @param row
 * @param color
 */
function checkWaagrecht(col, row, color) {
    if (col >= 1) {
        while (document.querySelector('[col="' + (col - 1) + '"][row="' + row + '"]')) {
            if (document.querySelector('[col="' + (col - 1) + '"][row="' + row + '"]').getAttribute("color") === color) {
                col--;
            } else {
                break;
            }
        }
    }
    if (col <= cellsInRow - 4) {
        for (let i = 1; i < 4; i++) {
            let newCol = (col + i);
            if (document.querySelector('[col="' + newCol + '"][row="' + row + '"]').getAttribute("color") !== color) {
                i = 1;
                break;
            } else {
                if (i === 3) {
                    gameOver = true;
                    gameWon(anzZuege, color);
                    break;
                }
            }
        }
    }
}

function gameWon(anz_zuege, color) {
    var gewonnen = true;
    $('#gewonnenDiv').append('<p>du hast gewonnen</p>');
    $('#zumScoreBoard').append('<button id="zumSBButton" type="button" class="btn btn-lg btn-danger"\n' +
        '                                onclick="updateDB(' + anz_zuege + ',' + gewonnen + ')">zum Scoreboard</button>');


}

function updateDB(anz_zuege, gewonnen) {
    $.ajax({
        'url': 'index',
        'method': 'post',
        'data': {'action': 'saveScore', 'anz_zuege': anz_zuege, 'gewonnen': gewonnen},
        'success': function (receivedData) {
            if (receivedData.result) {
                //after save change url to scoreboard.php
                location.href = 'scoreboard';
            }
        }
    });

}
