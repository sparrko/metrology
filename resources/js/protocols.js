// require('./system/offline');

$('body').on('click', '#protocolsOffline', function (e) { protocolsOffline(); });
$('body').on('click', '#protocolsOfflineEdit', function (e) { protocolsOfflineEdit(); });
$('body').on('click', '#protocolsOfflineEditPost', function (e) { protocolsOfflineEditPost(); });

function protocolsOffline() {
    $('#content').html("");

    let html = `
        <div class='card'>
            <div class='card-header'>
                <div class='card-header-left'>
                    Список протоколов (офлайн)
                </div>
                <div class='card-header-right'>
                    <button id='protocolsOfflineEdit' class='btn btn-primary'>Новый протокол</button>
                </div>
            </div>
            <div class='card-body'>`;
    let dataJson = localStorage.getItem('offlineProtocols');
    if (dataJson !== null && dataJson.length > 0) {
        let data = JSON.parse(dataJson);
        for (let i = 0; i < data.length; i += 1) {
            html += "<p>" + data[i].value + "</p>";
        }
    }
    html += "</div></div>";
    
    $('#content').html(html);
}
function protocolsOfflineGetFilters() {

}
function protocolsOfflineEdit() {
    $('#content').html("");
    let html = "<div class='frame'>Добавление";
    html += "<p>Наименование счетчика: <input type='text' id='simanufacturer'></p>";
    html += "<button id='protocolsOfflineEditPost' class='btn btn-primary'>Сохранить</button>";
    html += "<button id='protocolsOffline' class='btn btn-primary'>Вернуться назад</button></div class='frame'>";
    $('#content').html(html);

}
function protocolsOfflineEditPost() {
    let protocol = {
        value: $('#content input#simanufacturer').val()
    };
    let dataJson = localStorage.getItem('offlineProtocols');
    let data = [];
    if (dataJson !== null && dataJson.length > 0) data = JSON.parse(dataJson);
    data.push(protocol);
    localStorage.setItem('offlineProtocols', JSON.stringify(data));
    protocolsOffline();
}
function protocolsOfflineDownload() {

}
