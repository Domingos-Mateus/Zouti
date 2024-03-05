<div id="topbar" class="bg-white">
    <div style="padding: 0 25px; position: relative;">
      <div id="logo" class="d-lg-none-custom" style="position: absolute; top: 10px;">
          <div>
              <div style="padding: 15px 0px 0px 0px; cursor: pointer;" onclick="toggleSidebar()">
                  <div style="width: 15px; height: 2px; background: rgba(0,0,0,0.6); margin-bottom: 3px;"></div>
                  <div style="width: 15px; height: 2px; background: rgba(0,0,0,0.6); margin-bottom: 3px;"></div>
                  <div style="width: 15px; height: 2px; background: rgba(0,0,0,0.6); margin-bottom: 3px;"></div>
              </div>
          </div>
      </div>
      <div id="logo" class="mobile-logo">
          <div>
              <img _ngcontent-lvh-c121="" class="logo" src="https://content.pay.zouti.com.br/tenants/pay.zouti.com.br/logo.png">
          </div>
      </div>
      <div id="username" style="height: 58px; display: flex; align-items: center;">
          <div class="verde text-center" style="display: inline-flex; width: 30px; height: 30px; border-radius: 100px; padding-bottom: 10px; justify-content: center; align-items: center; padding-top: 10px; color: #fff;">
          <span style="font-size: 16px; font-weight: bold;"> {{$usuarios->primeiro_caractere}} </span>
          </div>
          <span style="font-size: 14px; margin-left: 10px;" class="hidden-name">
              <strong style="letter-spacing: 0.32px;">{{ Auth::user()->name }}</strong>
          </span>
      </div>
    </div>
  </div>
