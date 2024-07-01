<nav class="sidebar">
	<div class="sidebar-header">
		<a href="#" class="sidebar-brand">
			<img src="<?= base_url('assets/logo.png') ?>" alt="" width="160">
		</a>
		<div class="sidebar-toggler not-active">
			<span></span>
			<span></span>
			<span></span>
		</div>
	</div>
	<div class="sidebar-body">
		<ul class="nav">
			<li class="nav-item <?= link_is_active("") ?>">
				<a href="<?= base_url("") ?>" class="nav-link">
					<i class="link-icon" data-feather="box"></i>
					<span class="link-title">Dashboard</span>
				</a>
			</li>
			<li class="nav-item <?= link_is_active("leads") ?>">
				<a href="<?= base_url("leads") ?>" class="nav-link">
					<i class="link-icon" data-feather="database"></i>
					<span class="link-title">Leads</span>
				</a>
			</li>
			<li class="nav-item <?= link_is_active("campaigns") ?>">
				<a href="<?= base_url("campaigns") ?>" class="nav-link">
					<i class="link-icon" data-feather="database"></i>
					<span class="link-title">Campaigns</span>
				</a>
			</li>
			<li class="nav-item <?= link_is_active("analytics") ?>">
				<a href="<?= base_url("analytics") ?>" class="nav-link">
					<i class="link-icon" data-feather="pie-chart"></i>
					<span class="link-title">Analytics</span>
				</a>
			</li>

			<li class="nav-item nav-category">Leads Channels</li>
			<li class="nav-item <?= link_is_active("channels") ?>">
				<a href="<?= base_url("channels") ?>" class="nav-link">
					<i class="link-icon" data-feather="database"></i>
					<span class="link-title">Channels</span>
				</a>
			</li>
			<li class="nav-item <?= link_is_active("settings") ?>">
				<a href="<?= base_url("settings") ?>" class="nav-link">
					<i class="link-icon" data-feather="settings"></i>
					<span class="link-title">Settings</span>
				</a>
			</li>

			<li class="nav-item nav-category">Apps</li>
			<li class="nav-item <?= link_is_active("app-settings") ?>">
				<a href="<?= base_url("app-settings") ?>" class="nav-link">
					<i class="link-icon" data-feather="settings"></i>
					<span class="link-title">App Settings</span>
				</a>
			</li>

			<li class="nav-item nav-category">Docs</li>
			<li class="nav-item">
				<a href="https://www.nobleui.com/html/documentation/docs.html" target="_blank" class="nav-link">
					<i class="link-icon" data-feather="hash"></i>
					<span class="link-title">Documentation</span>
				</a>
			</li>
		</ul>
	</div>
</nav>