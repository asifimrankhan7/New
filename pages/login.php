<div id="page-login" class="page">
  <div class="login-classic-wrap">
    <!-- Back Button -->
    <div class="login-back" onclick="nav('home')">
      <i data-lucide="arrow-left" style="width: 24px; height: 24px;"></i>
      <span>Back to Home</span>
    </div>

    <!-- Background image -->
    <div class="login-bg">
      <img src="<?= htmlspecialchars($GALLERY_IMGS[3]['url'] ?? 'https://images.unsplash.com/photo-1600607687920-4e2a09cf159d?ixlib=rb-4.0.3&auto=format&fit=crop&w=1600&q=80') ?>" alt="Classic Estate" />
      <div class="login-overlay"></div>
    </div>
    
    <!-- Centered Card -->
    <div class="login-card">
      <div class="login-card-inner">
        <h2 class="serif">Welcome Back</h2>
        <p class="login-subtitle">Sign in to your Noble Estates account to view saved properties and manage your preferences.</p>
        
        <form onsubmit="event.preventDefault(); showToast('Login Successful'); setTimeout(()=>nav('home'), 1000);">
          <div class="input-grp-classic">
            <label>Email Address</label>
            <input type="email" placeholder="Enter your email" required />
          </div>
          <div class="input-grp-classic">
            <label>Password</label>
            <input type="password" placeholder="Enter your password" required />
          </div>
          
          <button type="submit" class="btn-classic" style="margin-top: 24px;">Sign In</button>
        </form>
      </div>
    </div>
  </div>
</div>
