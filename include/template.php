<script id="hermit-template" type="text/x-handlebars-template">
	<div id="hermit-shell">
		<div id="hermit-shell-content" class="media-modal">
			<div class="media-modal-content">
				<a id="hermit-shell-close" class="media-modal-close" href="javascript:;"><span class="media-modal-icon"><span
							class="screen-reader-text">关闭媒体面板</span></span></a>

				<div id="hermit-shell-body">
					<div class="media-frame-title">
						<h1>插入音乐<span class="dashicons dashicons-arrow-down"></span></h1>
					</div>
					<div class="media-frame-router clearfix">
						<div class="media-router">
							<a href="javascript:;" class="media-menu-item active">网易音乐</a>
							<a href="javascript:;" class="media-menu-item">虾米音乐</a>
							<a href="javascript:;" class="media-menu-item">腾讯音乐</a>
							<a href="javascript:;" class="media-menu-item">酷狗音乐</a>
							<a href="javascript:;" class="media-menu-item">百度音乐</a>
							<a href="javascript:;" class="media-menu-item">本地音乐</a>
						</div>
						<a class="hermit-help" href="<?php echo admin_url("admin.php?page=hermit-help"); ?>"
						   target="_blank">帮助?</a>
					</div>
					<div class="media-frame-content">
						<ul class="hermit-ul">
							<li class="hermit-li active" data-type="netease">
								<div>
									<label><input type="radio" name="netease_type" value="netease_songs" checked="checked">单曲</label>
									<label><input type="radio" name="netease_type" value="netease_album">专辑</label>
									<label><input type="radio" name="netease_type" value="netease_playlist">歌单</label>
								</div>
								<textarea class="hermit-textarea large-text code" cols="30" rows="9"
										  placeholder="输入网易云音乐音乐地址。。。"></textarea>
							</li>
							<li class="hermit-li" data-type="xiami">
								<div>
									<label><input type="radio" name="xiami_type" value="xiami_songlist" checked="checked">单曲</label>
									<label><input type="radio" name="xiami_type" value="xiami_album">专辑</label>
									<label><input type="radio" name="xiami_type" value="xiami_playlist">精选集</label>
								</div>
								<textarea class="hermit-textarea large-text code" cols="30" rows="9"
										  placeholder="输入虾米音乐地址。。。"></textarea>
							</li>
							<li class="hermit-li" data-type="tencent">
								<div>
									<label><input type="radio" name="tencent_type" value="tencent_songlist" checked="checked">单曲</label>
									<label><input type="radio" name="tencent_type" value="tencent_album">专辑</label>
									<label><input type="radio" name="tencent_type" value="tencent_playlist">歌单</label>
								</div>
								<textarea class="hermit-textarea large-text code" cols="30" rows="9"
										  placeholder="输入QQ音乐地址。。。"></textarea>
							</li>
							<li class="hermit-li" data-type="kugou">
								<div>
									<label><input type="radio" name="kugou_type" value="kugou_songlist" checked="checked">单曲</label>
									<label><input type="radio" name="kugou_type" value="kugou_album">专辑</label>
									<label><input type="radio" name="kugou_type" value="kugou_playlist">歌单</label>
								</div>
								<textarea class="hermit-textarea large-text code" cols="30" rows="9"
										  placeholder="输入酷狗音乐地址。。。"></textarea>
							</li>
							<li class="hermit-li" data-type="baidu">
								<div>
									<label><input type="radio" name="baidu_type" value="baidu_songlist" checked="checked">单曲</label>
									<label><input type="radio" name="baidu_type" value="baidu_album">专辑</label>
									<label><input type="radio" name="baidut_type" value="baidu_playlist">歌单</label>
								</div>
								<textarea class="hermit-textarea large-text code" cols="30" rows="9"
										  placeholder="输入百度音乐地址。。。"></textarea>
							</li>
							<li class="hermit-li" data-type="remote">
								<div id="hermit-remote-content">
									<ul></ul>
									<div class="hermit-remote-footer">
										<a id="hermit-remote-button" href="javascript:;">加载更多</a>
									</div>
								</div>
							</li>
						</ul>
						<div>
							<label for="hermit-auto"><input type="checkbox" id="hermit-auto">自动播放</label>
							<label for="hermit-loop"><input type="checkbox" id="hermit-loop">循环播放</label>
						</div>
						<div id="hermit-preview">
						</div>
					</div>
					<div class="media-frame-toolbar">
						<div class="media-toolbar">
							<div class="media-toolbar-primary search-form">
								<a id="hermit-shell-insert" href="javascript:;"
								   class="button media-button button-primary button-large media-button-insert"
								   disabled="disabled">插入至文章</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="hermit-shell-backdrop" class="media-modal-backdrop">
		</div>
	</div>
</script>
<script id="hermit-remote-template" type="text/x-handlebars-template">
	{{#data}}
	<li data-id="{{id}}">{{song_name}} - {{song_author}}</li>
	{{/data}}
</script>
