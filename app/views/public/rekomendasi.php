<main class="form-page">
    <div class="form-container">
        <div class="form-header">
            <h1 class="form-header__title">Dapatkan Rekomendasi Personal</h1>
            <p class="form-header__subtitle">Jawab beberapa pertanyaan untuk rekomendasi terbaik</p>
        </div>

        <!-- Progress Bar -->
        <div class="progress-bar">
            <div class="progress-bar__step progress-bar__step--active" data-step="1">
                <div class="progress-bar__circle">1</div>
                <div class="progress-bar__label">Game & Tipe</div>
            </div>
            <div class="progress-bar__line"></div>
            <div class="progress-bar__step" data-step="2">
                <div class="progress-bar__circle">2</div>
                <div class="progress-bar__label">Spesifikasi</div>
            </div>
            <div class="progress-bar__line"></div>
            <div class="progress-bar__step" data-step="3">
                <div class="progress-bar__circle">3</div>
                <div class="progress-bar__label">Budget</div>
            </div>
        </div>

        <!-- Multi-Step Form -->
        <form id="recommendationForm" class="form">
            <!-- Step 1: Game & Device Type -->
            <div class="form-step form-step--active" data-step="1">
                <div class="form-group">
                    <label for="gameType" class="form-label">
                        <i class="fas fa-trophy"></i> Jenis Game Favorit
                    </label>
                    <select id="gameType" class="form-select" required>
                        <option value="">Pilih jenis game...</option>
                        <option value="AAA">AAA Games (GTA V, RDR2, Cyberpunk)</option>
                        <option value="FPS">FPS/Shooter (CS:GO, Valorant, COD)</option>
                        <option value="MOBA">MOBA (Dota 2, Mobile Legends)</option>
                        <option value="RPG">RPG (Elden Ring, Witcher 3)</option>
                        <option value="OpenWorld">Open World (Minecraft, ARK)</option>
                        <option value="eSports">eSports Competitive</option>
                    </select>
                </div>

                <div class="form-group">
                    <label class="form-label">
                        <i class="fas fa-laptop"></i> Portabilitas
                    </label>
                    <div class="radio-group">
                        <label class="radio-label">
                            <input type="radio" name="portability" value="desktop" checked>
                            <span class="radio-custom"></span>
                            <span>PC Desktop (Performa Maksimal)</span>
                        </label>
                        <label class="radio-label">
                            <input type="radio" name="portability" value="laptop">
                            <span class="radio-custom"></span>
                            <span>Laptop (Portabel & Fleksibel)</span>
                        </label>
                    </div>
                </div>

                <div class="form-group">
                    <label for="deviceType" class="form-label">
                        <i class="fas fa-desktop"></i> Tipe Perangkat
                    </label>
                    <select id="deviceType" class="form-select" required>
                        <option value="">Pilih tipe perangkat...</option>
                        <option value="custom">PC Rakitan (Custom Build)</option>
                        <option value="brand">PC Brand (Dell, HP, Lenovo)</option>
                        <option value="laptop">Laptop Gaming</option>
                    </select>
                </div>

                <div class="form-actions">
                    <button type="button" class="btn btn--primary" onclick="nextStep()">
                        Lanjut <i class="fas fa-arrow-right"></i>
                    </button>
                </div>
            </div>

            <!-- Step 2: Technical Specs -->
            <div class="form-step" data-step="2">
                <div class="form-group">
                    <label class="form-label">
                        <i class="fas fa-tv"></i> Resolusi Target
                    </label>
                    <div class="button-group">
                        <button type="button" class="btn-option" data-value="1080p">1080p Full HD</button>
                        <button type="button" class="btn-option" data-value="1440p">1440p QHD</button>
                        <button type="button" class="btn-option" data-value="4K">4K Ultra HD</button>
                    </div>
                    <input type="hidden" id="resolution" name="resolution" value="1080p">
                </div>

                <div class="form-group">
                    <label for="refreshRate" class="form-label">
                        <i class="fas fa-sync"></i> Refresh Rate Minimum: <span id="refreshRateValue">60</span> Hz
                    </label>
                    <input type="range" id="refreshRate" class="form-range" min="60" max="240" step="30" value="60">
                    <div class="range-labels">
                        <span>60Hz</span>
                        <span>240Hz</span>
                    </div>
                </div>

                <div class="form-group">
                    <label for="screenSize" class="form-label">
                        <i class="fas fa-expand"></i> Ukuran Layar: <span id="screenSizeValue">24</span>"
                    </label>
                    <input type="range" id="screenSize" class="form-range" min="14" max="32" step="2" value="24">
                    <div class="range-labels">
                        <span>14"</span>
                        <span>32"</span>
                    </div>
                </div>

                <div class="form-group">
                    <label class="form-label">
                        <i class="fas fa-hdd"></i> Storage Minimum
                    </label>
                    <div class="checkbox-group">
                        <label class="checkbox-label">
                            <input type="checkbox" name="storage" value="256GB">
                            <span class="checkbox-custom"></span>
                            <span>256GB SSD</span>
                        </label>
                        <label class="checkbox-label">
                            <input type="checkbox" name="storage" value="512GB" checked>
                            <span class="checkbox-custom"></span>
                            <span>512GB SSD</span>
                        </label>
                        <label class="checkbox-label">
                            <input type="checkbox" name="storage" value="1TB">
                            <span class="checkbox-custom"></span>
                            <span>1TB SSD</span>
                        </label>
                        <label class="checkbox-label">
                            <input type="checkbox" name="storage" value="2TB">
                            <span class="checkbox-custom"></span>
                            <span>2TB SSD</span>
                        </label>
                    </div>
                </div>

                <div class="form-actions">
                    <button type="button" class="btn btn--secondary" onclick="prevStep()">
                        <i class="fas fa-arrow-left"></i> Kembali
                    </button>
                    <button type="button" class="btn btn--primary" onclick="nextStep()">
                        Lanjut <i class="fas fa-arrow-right"></i>
                    </button>
                </div>
            </div>

            <!-- Step 3: Budget & Preferences -->
            <div class="form-step" data-step="3">
                <div class="form-group">
                    <label for="budget" class="form-label">
                        <i class="fas fa-money-bill-wave"></i> Budget Maksimal
                    </label>
                    <div class="budget-display" id="budgetDisplay">Rp 25.000.000</div>
                    <input type="range" id="budget" class="form-range" min="5000000" max="100000000" step="1000000" value="25000000">
                    <div class="range-labels">
                        <span>Rp 5 Juta</span>
                        <span>Rp 100 Juta</span>
                    </div>
                </div>

                <div class="form-group">
                    <label class="form-label">
                        <i class="fas fa-star"></i> Kebutuhan Upgrade (1-5 Tahun)
                    </label>
                    <div class="star-rating">
                        <input type="radio" id="star5" name="upgradeNeed" value="5">
                        <label for="star5" class="star"><i class="fas fa-star"></i></label>
                        <input type="radio" id="star4" name="upgradeNeed" value="4">
                        <label for="star4" class="star"><i class="fas fa-star"></i></label>
                        <input type="radio" id="star3" name="upgradeNeed" value="3" checked>
                        <label for="star3" class="star"><i class="fas fa-star"></i></label>
                        <input type="radio" id="star2" name="upgradeNeed" value="2">
                        <label for="star2" class="star"><i class="fas fa-star"></i></label>
                        <input type="radio" id="star1" name="upgradeNeed" value="1">
                        <label for="star1" class="star"><i class="fas fa-star"></i></label>
                    </div>
                    <small class="form-hint">1 = Upgrade Cepat, 5 = Future-Proof</small>
                </div>

                <div class="form-group">
                    <label class="form-label">
                        <i class="fas fa-bolt"></i> Preferensi Utama
                    </label>
                    <div class="toggle-group">
                        <span class="toggle-label">Performa Tinggi</span>
                        <label class="toggle-switch">
                            <input type="checkbox" id="preference">
                            <span class="toggle-slider"></span>
                        </label>
                        <span class="toggle-label">Efisiensi Daya</span>
                    </div>
                </div>

                <div class="form-actions">
                    <button type="button" class="btn btn--secondary" onclick="prevStep()">
                        <i class="fas fa-arrow-left"></i> Kembali
                    </button>
                    <button type="submit" class="btn btn--primary btn--large">
                        <i class="fas fa-rocket"></i> Dapatkan Rekomendasi
                    </button>
                </div>
            </div>
        </form>
    </div>
</main>