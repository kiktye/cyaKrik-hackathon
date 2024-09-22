<div id="accessibility-widget" class="fixed right-0 top-1/3 z-[9999] bg-gray-200 p-4 rounded-lg shadow-lg">
    <button id="accessibility-btn" class="px-4 py-2 bg-red-600 text-white font-bold rounded-l hover:bg-red-700 fixed right-0 top-[35%]">
        Пристапност
    </button>

    <div id="accessibility-panel" class="bg-gray-100 shadow-lg p-4 w-72 hidden rounded-lg">
        <div class="text-center bg-red-600 text-white py-2 font-semibold rounded-t-lg">Пристапност</div>

        <!-- XL Oversized Widget Toggle -->
        <div class="flex items-center justify-between my-4">
            <span class="font-bold text-lg">XL</span>
            <span class="text-lg">Oversized Widget</span>
            <label class="switch">
                <input type="checkbox" id="toggle-xl">
                <span class="slider round"></span>
            </label>
        </div>

        <!-- Accessibility Options -->
        <div class="grid grid-cols-2 gap-4">
            <!-- Cursor Size -->
            <button id="toggle-cursor" class="bg-white border border-gray-300 p-3 text-center rounded-lg flex flex-col items-center justify-center">
                <i class="fas fa-mouse-pointer fa-2x"></i>
                <span>Cursor Size</span>
            </button>

            <!-- Screen Reader -->
            <button id="toggle-screen-reader" class="bg-white border border-gray-300 p-3 text-center rounded-lg flex flex-col items-center justify-center">
                <i class="fas fa-volume-up fa-2x"></i>
                <span>Screen Reader</span>
            </button>

            <!-- Contrast -->
            <button id="toggle-contrast" class="bg-white border border-gray-300 p-3 text-center rounded-lg flex flex-col items-center justify-center">
                <i class="fas fa-adjust fa-2x"></i>
                <span>Contrast</span>
            </button>

            <!-- Reading Mask -->
            <button id="toggle-reading-mask" class="bg-white border border-gray-300 p-3 text-center rounded-lg flex flex-col items-center justify-center">
                <i class="fas fa-low-vision fa-2x"></i>
                <span>Reading Mask</span>
            </button>

            <!-- Pause Animation -->
            <button id="toggle-animation" class="bg-white border border-gray-300 p-3 text-center rounded-lg flex flex-col items-center justify-center">
                <i class="fas fa-pause-circle fa-2x"></i>
                <span>Pause Animation</span>
            </button>

            <!-- Saturation -->
            <button id="toggle-saturation" class="bg-white border border-gray-300 p-3 text-center rounded-lg flex flex-col items-center justify-center">
                <i class="fas fa-tint fa-2x"></i>
                <span>Saturation</span>
            </button>
        </div>
    </div>

    <!-- CSS for Styling -->
    <style>
        #accessibility-widget {
            z-index: 9999;
        }

        #accessibility-panel {
            right: -100%;
            opacity: 0;
            transition: all 0.3s ease-in-out;
            display: none;
        }

        #accessibility-panel.visible {
            display: block;
            right: 0;
            opacity: 1;
        }

        .switch {
            position: relative;
            display: inline-block;
            width: 34px;
            height: 20px;
        }

        .switch input {
            opacity: 0;
            width: 0;
            height: 0;
        }

        .slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #ccc;
            transition: 0.4s;
        }

        .slider:before {
            position: absolute;
            content: "";
            height: 12px;
            width: 12px;
            left: 4px;
            bottom: 4px;
            background-color: white;
            transition: 0.4s;
        }

        input:checked + .slider {
            background-color: #2196F3;
        }

        input:checked + .slider:before {
            transform: translateX(14px);
        }

        .slider.round {
            border-radius: 34px;
        }

        .slider.round:before {
            border-radius: 50%;
        }

        /* Active button styling */
        .active {
            background-color: #e53e3e !important; /* Red background */
            color: white;
        }

        /* High contrast mode */
        .high-contrast {
            filter: contrast(3);
        }

        /* Large cursor mode */
        .large-cursor {
            cursor: url('path_to_large_cursor_image'), auto;
        }

        /* Pause animations */
        .pause-animations * {
            animation: none !important;
            transition: none !important;
        }

        /* Saturation */
        .low-saturation {
            filter: saturate(0.2);
        }

        /* Reading Mask */
        #reading-mask {
            position: fixed;
            width: 100%;
            height: 50px;
            background: rgba(0, 0, 0, 0.5);
            pointer-events: none;
        }
    </style>

    <!-- JavaScript for Widget Functionality -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const accessibilityBtn = document.getElementById('accessibility-btn');
            const accessibilityPanel = document.getElementById('accessibility-panel');

            let readingMaskActive = false;
            let readingMaskElement;

            // Toggle the visibility of the accessibility panel
            accessibilityBtn.addEventListener('click', function() {
                accessibilityPanel.classList.toggle('visible');
                console.log("Panel toggled");
            });

            // Toggle the XL size of the widget (with proper zoom without horizontal scroll)
            document.getElementById('toggle-xl').addEventListener('change', function() {
                if (this.checked) {
                    document.body.style.transform = 'scale(1.2)';
                } else {
                    document.body.style.transform = 'scale(1)';
                }
            });

            // Toggle large cursor size
            document.getElementById('toggle-cursor').addEventListener('click', function() {
                document.body.classList.toggle('large-cursor');
                this.classList.toggle('active');
                console.log("Cursor size toggled");
            });

            // Toggle high contrast mode
            document.getElementById('toggle-contrast').addEventListener('click', function() {
                document.body.classList.toggle('high-contrast');
                this.classList.toggle('active');
                console.log("Contrast toggled");
            });

            // Screen Reader (SpeechSynthesis API)
            const synth = window.speechSynthesis;
            document.getElementById('toggle-screen-reader').addEventListener('click', function() {
                this.classList.toggle('active');
                if (this.classList.contains('active')) {
                    const utterance = new SpeechSynthesisUtterance("Screen Reader Activated");
                    synth.speak(utterance);
                } else {
                    synth.cancel();
                }
            });

            // Reading Mask
            document.getElementById('toggle-reading-mask').addEventListener('click', function() {
                if (!readingMaskActive) {
                    readingMaskElement = document.createElement('div');
                    readingMaskElement.id = 'reading-mask';
                    document.body.appendChild(readingMaskElement);

                    document.addEventListener('mousemove', function(e) {
                        readingMaskElement.style.top = e.clientY - 25 + 'px';
                    });

                    this.classList.add('active');
                    readingMaskActive = true;
                } else {
                    readingMaskElement.remove();
                    this.classList.remove('active');
                    readingMaskActive = false;
                }
            });

            // Pause all animations
            document.getElementById('toggle-animation').addEventListener('click', function() {
                document.body.classList.toggle('pause-animations');
                this.classList.toggle('active');
                console.log("Animations paused/toggled");
            });

            // Adjust saturation
            document.getElementById('toggle-saturation').addEventListener('click', function() {
                document.body.classList.toggle('low-saturation');
                this.classList.toggle('active');
                console.log("Saturation toggled");
            });
        });
    </script>
</div>
