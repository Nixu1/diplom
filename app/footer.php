<style>
/*--------------Footer-----------------*/
.page-footer {
  background-color: #3775dd;
  padding-top: 60px;
  padding-bottom: 60px;
  text-align: center;
  margin-top:50px;
}

.page-footer .adr__adr-text {
  display: block;
  margin-bottom: 8px;
  font-size: 14px;
  line-height: 1.71px;
  letter-spacing: 0.03em;
}

.contact-information{
  margin:0 60px;
}
@media screen and (min-width: 768px) {
  .page-footer .adr__adr-text {
    margin-bottom: 9px;
  }
}

.page-footer .site-contacts {
  display: inline-block;
}

.page-footer .logo {
  display: block;
  padding-top: 0px;
  padding-bottom: 0px;
  margin-bottom: 20px;
}

.page-footer .sosial-links {
  margin: 0;
}

.page-footer .sosial-links__sosial-link {
  fill: #ffffff;
  background-color: rgba(255, 255, 255, 0.1);
  -webkit-transition: background-color 250ms cubic-bezier(0.4, 0, 0.2, 1);
  transition: background-color 250ms cubic-bezier(0.4, 0, 0.2, 1);
  color: #ffffff;
}

.page-footer .sosial-links__sosial-link:hover, .page-footer .sosial-links__sosial-link:focus {
  fill: #ffffff;
  background-color: #2196f3;
}

.page-footer .logo--logo-color {
  color: #ffffff;
}

.page-footer .site-contacts__contacts-link {
  display: inline-block;
}

.page-footer .site-contacts__contacts-item:not(:last-child) {
  margin-bottom: 8px;
}

@media screen and (min-width: 768px) {
  .page-footer .site-contacts__contacts-item:not(:last-child) {
    margin-bottom: 9px;
  }
}

.page-footer__footer-content {
  display: block;
}

@media (min-width: 1200px) {
  .page-footer__footer-content {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: baseline;
        -ms-flex-align: baseline;
            align-items: baseline;
  }
}

@media (min-width: 768px) {
  .page-footer__links {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: baseline;
        -ms-flex-align: baseline;
            align-items: baseline;
  }
}

.subscribe__subscribe-text,
.folow__folow-text {
  text-transform: uppercase;
  font-weight: bold;
  font-style: normal;
  line-height: 1.14;
  letter-spacing: 0.03em;
  text-transform: uppercase;
  color: #ffffff;
  margin-bottom: 20px;
}

@media screen and (max-width: 767px) {
  .contact-information {
    margin-bottom: 60px;
  }
}

.subscribe {
  text-align: center;
  margin-bottom: 60px;
  margin:0 60px;
}

@media screen and (min-width: 1200px) {
  .subscribe {
    margin-right: auto;
  }
}

.sosial-links {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  padding: 0;
}

.sosial-links__sosial-icon {
  fill: currentColor;
}

.sosial-links__sosial-link {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  color: #afb1b8;
  width: 44px;
  height: 44px;
  padding: 0;
  border: none;
  border-radius: 50%;
  /*padding: 12px 12px;*/
  -webkit-transition: color 250ms cubic-bezier(0.4, 0, 0.2, 1), background-color 250ms cubic-bezier(0.4, 0, 0.2, 1);
  transition: color 250ms cubic-bezier(0.4, 0, 0.2, 1), background-color 250ms cubic-bezier(0.4, 0, 0.2, 1);
}

.sosial-links__sosial-link:hover, .sosial-links__sosial-link:focus {
  color: #ffffff;
  background-color: #2196f3;
}

.sosial-links__sosial-item:not(:last-child) {
  margin-right: 10px;
}
.container{
    display:flex;
    justify-content: center;
}
ul{
    list-style-type:none;
}

</style>

<footer class="page-footer">
        <div class="container">
            <div class="page-footer__footer-content">
                <div class="page-footer__links">
                    <div class="contact-information">
                        <a href="./index.php" lang="en" class="logo link" style="font-size:36px;font-weight:bold;">Travel<span class="logo--logo-color" style="font-size:36px;font-weight:bold;">mode</span></a>
                    <address class="adr">

                        <p class="adr__adr-text">© Travelmode 2023 Все права защищены</p>

                    </address>
                        <ul class="site-contacts list">
                            <li class="site-contacts__contacts-item">
                                <p>travelmode@gmail.com</p>
                            </li>
                            <li class="site-contacts__contacts-item">
                                <p>+7 983 527 63 38</p>
                            </li>
                        </ul>
                    </div>
                    <div class="subscribe">
                        <p class="subscribe__subscribe-text">присоединяйтесь</p>
                        <ul class="sosial-links">
                            <li class="list sosial-links__sosial-item">
                                <a href="" class="link sosial-links__sosial-link"> <svg class="sosial-links__sosial-icon" width="20" height="20">
                                        <use href=assets/img/sprite.svg#icon-instagram></use>
                                    </svg></a>
                            </li>
                            <li class="list sosial-links__sosial-item">
                                <a href="" class="link sosial-links__sosial-link"> <svg class="sosial-links__sosial-icon" width="20" height="16.25">
                                        <use href=assets/img/sprite.svg#icon-twitter></use>
                                    </svg></a>
                            </li>
                            <li class="list sosial-links__sosial-item">
                                <a href="" class="link sosial-links__sosial-link"> <svg class="sosial-links__sosial-icon" width="20" height="20">
                                        <use href=assets/img/sprite.svg#icon-facebook></use>
                                    </svg></a>
                            </li>
                            <li class="list sosial-links__sosial-item">
                                <a href="" class="link sosial-links__sosial-link"> <svg class="sosial-links__sosial-icon" width="20" height="20">
                                        <use href=assets/img/sprite.svg#icon-linkedin></use>
                                    </svg></a>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </footer>