const addMessage = function (msg, msg_class = "", kt_bg_class) {
    $(".kt-chat__messages").append(`<div class="kt-chat__message ${msg_class}">
            <div class="kt-chat__user">
                <span class="kt-media kt-media--circle kt-media--sm">
                    <img src="${msg.sender_avatar}" alt="image">
                </span>
                <a href="#" class="kt-chat__username">${msg.sender_name}</span></a>
                <span class="kt-chat__datetime">
                    ${msg.created}</span>
            </div>
            <div class="kt-chat__text ${kt_bg_class}">${msg.body}</div>
        </div>`);
};

const conversation = function (chat) {
    $(".kt-widget__items").append(`<a id="chat"
        data-id="${chat.otherParticipant.id}"
         href="javascript:;">
            <div class="kt-widget__item">
                <span class="kt-media kt-media--circle">
                    <img src="${chat.otherParticipant.image}"
                        alt="image">
                </span>
                <div class="kt-widget__info">
                    <div class="kt-widget__section">
                        <span class="kt-widget">
                        ${chat.otherParticipant.name}
                        </span>
                        <span class="kt-badge kt-badge--success kt-badge--dot"></span>
                     </div>
                    <span class="kt-widget__desc">
                    ${chat.last_message.body}
                    </span>
                </div>
                <div class="kt-widget__action">
                    <span class="kt-widget__date">
                    ${chat.last_message_date}
                    </span>
                    <span class="kt-badge kt-badge--success kt-font-bold"
                    ${
                        chat.otherParticipant.unread_messages_count > 0
                            ? ""
                            : 'style= "display:none"'
                    };">
                    ${chat.otherParticipant.unread_messages_count}
                    </span>

                </div>
            </div>
        </a>`);
};
