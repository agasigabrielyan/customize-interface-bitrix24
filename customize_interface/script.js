BX.ready(function() {
    createUserChatButton();
});
BX.addCustomEvent("SidePanel.Slider:onOpenComplete", BX.delegate(function(){
    createUserChatButton();
}));

function createUserChatButton() {
    let crmPagetitleBtnBox = document.querySelector(".crm-pagetitle-btn-box");

    let chatOpenButton = BX.create(
        "div",
        {
            props: {
                className: 'ui-btn-main',
                id: 'custom-chat-button'
            },
            text: "Открыть чат",
            events: {
                click: function() {
                    openChat()
                }
            }
        }
    );
    BX.prepend(chatOpenButton, crmPagetitleBtnBox);
}

function openChat() {
    alert('Мы собираемся открыть всплывающее окно чата или сделать ajax запрос');
}