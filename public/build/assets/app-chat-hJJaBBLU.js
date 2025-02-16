import{S as o,a as r}from"./simplebar.esm-Geatf4qP.js";import"./_commonjsHelpers-BosuxZz1.js";class c{initStatus(){new o(".mySwiper",{loop:!0,pagination:".swiper-pagination",paginationClickable:!0,slidesPerView:"auto",spaceBetween:8,autoHeight:!0})}initChats(){const e=this;this.chatContainer=document.querySelector(".chat-conversation-list"),this.simplebar=new r(this.chatContainer),this.scrollPosition=0,this.scrollToBottom(!1);const s=document.querySelector("form#chat-form"),t=s.querySelector("input");s.addEventListener("submit",function(a){a.preventDefault();const i=t.value;i.trim().length>0&&(t.value="",e.sendMessage(i))}),this.simplebar.getScrollElement()&&(this.simplebar.getScrollElement().onscroll=function(a){e.scrollPosition=a.target.scrollTop})}sendMessage(e){const s=this,t=this.toNodes(this.createHTMLMessageFromMe(e));this.simplebar.getContentElement()&&(this.simplebar.getContentElement().appendChild(t),this.simplebar.recalculate(),this.scrollToBottom(),setTimeout(function(){s.receiveMessage("Server is not connected 😔")},1e3))}receiveMessage(e){const s=this.toNodes(this.createHTMLMessageFromOther(e));this.simplebar.getContentElement().appendChild(s),this.simplebar.recalculate(),this.scrollToBottom()}createHTMLMessageFromMe(e){const s=new Date,t=s.getHours()+":"+s.getMinutes()+" "+(s.getHours()>11?"pm":"am");return`<li class="clearfix odd">
    <div class="chat-conversation-text ms-0">
        <div class="d-flex justify-content-end">
            <div class="chat-conversation-actions dropdown dropstart">
                <a href="javascript: void(0);" class="pe-1" data-bs-toggle="dropdown" aria-expanded="false"><i class='bx bx-dots-vertical-rounded fs-18'></i></a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="javascript: void(0);">
                        <i class="bx bx-share fs-18 me-2"></i>Reply
                    </a>
                    <a class="dropdown-item" href="javascript: void(0);">
                        <i class="bx bx-share-alt fs-18 me-2"></i>Forward
                    </a>
                    <a class="dropdown-item" href="javascript: void(0);">
                        <i class="bx bx-copy fs-18 me-2"></i>Copy
                    </a>
                    <a class="dropdown-item" href="javascript: void(0);">
                        <i class="bx bx-bookmark fs-18 me-2"></i>Bookmark
                    </a>
                    <a class="dropdown-item" href="javascript: void(0);">
                        <i class="bx bx-star fs-18 me-2"></i>Starred
                    </a>
                    <a class="dropdown-item" href="javascript: void(0);">
                        <i class="bx bx-info-square fs-18 me-2"></i>Mark as Unread
                    </a>
                    <a class="dropdown-item" href="javascript: void(0);">
                        <i class="bx bx-trash fs-18 me-2"></i>Delete
                    </a>
                </div>
            </div>
            <div class="chat-ctext-wrap">
                <p>`+e+`</p>
            </div>
        </div>
        <p class="text-muted fs-12 mb-0 mt-1">`+t+`<i class="bx bx-check-double ms-1 text-primary"></i></p>
    </div>
</li>
`}createHTMLMessageFromOther(e){const s=new Date,t=s.getHours()+":"+s.getMinutes()+" "+(s.getHours()>11?"pm":"am");return`<li class="clearfix">
    <div class="chat-conversation-text">
        <div class="d-flex">
            <div class="chat-ctext-wrap">
                <p>`+e+`</p>
            </div>
            <div class="chat-conversation-actions dropdown dropend">
                <a href="javascript: void(0);" class="ps-1" data-bs-toggle="dropdown" aria-expanded="false"><i class='bx bx-dots-vertical-rounded fs-18'></i></a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="javascript: void(0);">
                        <i class="bx bx-share fs-18 me-2"></i>Reply
                    </a>
                    <a class="dropdown-item" href="javascript: void(0);">
                        <i class="bx bx-share-alt fs-18 me-2"></i>Forward
                    </a>
                    <a class="dropdown-item" href="javascript: void(0);">
                        <i class="bx bx-copy fs-18 me-2"></i>Copy
                    </a>
                    <a class="dropdown-item" href="javascript: void(0);">
                        <i class="bx bx-bookmark fs-18 me-2"></i>Bookmark
                    </a>
                    <a class="dropdown-item" href="javascript: void(0);">
                        <i class="bx bx-star fs-18 me-2"></i>Starred
                    </a>
                    <a class="dropdown-item" href="javascript: void(0);">
                        <i class="bx bx-info-square fs-18 me-2"></i>Mark as Unread
                    </a>
                    <a class="dropdown-item" href="javascript: void(0);">
                        <i class="bx bx-trash fs-18 me-2"></i>Delete
                    </a>
                </div>
            </div>
        </div>
        <p class="text-muted fs-12 mb-0 mt-1 ms-2">`+t+`</p>
    </div>
</li>`}toNodes(e){return new DOMParser().parseFromString(e,"text/html").body.childNodes[0]}scrollToBottom(e=!0){const s=this;if(this.simplebar.getContentElement()){const t=this.simplebar.getContentElement().scrollHeight-570,i=setInterval(function(){s.scrollPosition+=2,s.simplebar.getScrollElement().scrollTop=s.scrollPosition,s.scrollPosition>t&&clearInterval(i)},e?10:1)}}init(){this.initStatus(),this.initChats()}}document.addEventListener("DOMContentLoaded",function(n){new c().init()});
