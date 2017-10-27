@extends('common.admin')

@section('content')
		<div class="container-fluid am-cf">
			<div class="row">
                    <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
                        <div class="widget am-cf">
                           
                            <div class="widget-body am-fr">

                                <form action="{{ url('admin/Ad/'.$datas->id)}}" method="post" class="am-form tpl-form-line-form" enctype="multipart/form-data">
									{{ csrf_field() }}
                                    {{ method_field('PUT') }}
                                    <div class="am-form-group">
                                        <label for="user-name" class="am-u-sm-3 am-form-label">公司名<span class="tpl-form-line-small-title"></span></label>
                                        <div class="am-u-sm-9">
                                            <input type="text" name="company_name" class="tpl-form-input" placeholder="请输入公司名" id="user-name" value="{{ $datas->company_name }}">
                                        </div>
                                    </div>


                                    <div class="am-form-group">
                                        <label for="user-name" class="am-u-sm-3 am-form-label">广告名<span class="tpl-form-line-small-title"></span></label>
                                        <div class="am-u-sm-9">
                                            <input type="text" name="ad_name" class="tpl-form-input" placeholder="请输入广告名" id="user-name" value="{{ $datas->ad_name }}">
                                        </div>
                                    </div>

									
									<div class="am-form-group">
                                        <label for="user-phone" name="ad_position" class="am-u-sm-3 am-form-label">广告位置 <span class="tpl-form-line-small-title"></span></label>
                                            <select data-am-selected name="ad_position">
                                              <option value='0' @if($datas->ad_position == 0) selected @endif>第一个</option>
                                              <option value='1' @if($datas->ad_position == 1) selected @endif>第二个</option>
                                              <option value='2' @if($datas->ad_position == 2) selected @endif>第三个</option>
                                              <option value='3' @if($datas->ad_position == 3) selected @endif>第四个</option>
                                              <option value='4' @if($datas->ad_position == 4) selected @endif>第五个</option>
                                              <option value='5' @if($datas->ad_position == 5) selected @endif>第六个</option>
                                            </select>
                                    </div>


                                    <div class="am-form-group">
                                        <label for="user-weibo" class="am-u-sm-3 am-form-label">广告图片<span class="tpl-form-line-small-title"></span></label>
                                        <div class="am-u-sm-9">
                                            <div class="am-form-group am-form-file">
                                                <div class="tpl-form-file-img">
                                                    <img src="assets/img/a5.png" alt="">
                                                </div>
                                                <button type="button" class="am-btn am-btn-danger am-btn-sm">
    										      <i class="am-icon-cloud-upload"></i> 添加广告图片</button>
                                                <input id="doc-form-file" type="file" name="ad_picture" multiple="" value="{{ $datas->ad_picture }}">
                                            </div>

                                        </div>
                                    </div>


                                    <div class="am-form-group">
                                        <label for="user-name" class="am-u-sm-3 am-form-label">联系人<span class="tpl-form-line-small-title"></span></label>
                                        <div class="am-u-sm-9">
                                            <input type="text" name="contacts" class="tpl-form-input" placeholder="请输入联系人" id="user-name" value="{{ $datas->contacts }}">
                                        </div>
                                    </div>
									
									<div class="am-form-group">
                                        <label for="user-name" class="am-u-sm-3 am-form-label">联系人电话<span class="tpl-form-line-small-title"></span></label>
                                        <div class="am-u-sm-9">
                                            <input type="text" name="contacts_phone" class="tpl-form-input" placeholder="请输入联系人电话" id="user-name" value="{{ $datas->contacts_phone }}">
                                        </div>
                                    </div>

                                    <div class="am-form-group">
                                        <label for="user-name" class="am-u-sm-3 am-form-label">链接<span class="tpl-form-line-small-title"></span></label>
                                        <div class="am-u-sm-9">
                                            <input type="text" name="link" class="tpl-form-input" placeholder="请输入链接" id="user-name" value="{{ $datas->link }}">
                                        </div>
                                    </div>

                                    <div class="am-form-group">
                                        <label for="user-name" class="am-u-sm-3 am-form-label">到期时间<span class="tpl-form-line-small-title"></span></label>
                                        <div class="am-u-sm-9">
                                            <input type="text" name="expire_time" class="tpl-form-input" placeholder="请输入到期时间" id="user-name" value="{{ $datas->expire_time }}">
                                        </div>
                                    </div>

                                    <div class="am-form-group">
                                        <label for="user-intro" class="am-u-sm-3 am-form-label">广告内容</label>
                                        <div class="am-u-sm-9">
                                            <textarea class="" rows="10" name="ad_content" id="user-intro" placeholder="请输入广告内容" >{{$datas->ad_content}}</textarea>
                                        </div>
                                    </div>


                                    <div class="am-form-group">
                                        <div class="am-u-sm-9 am-u-sm-push-3">
                                            <button type="submit" class="am-btn am-btn-primary tpl-btn-bg-color-success ">提交</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
			</div>
@endsection