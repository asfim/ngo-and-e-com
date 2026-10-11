<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    /**
     * Sample catalog of fair-trade artisan and community products.
     */
    protected array $categories = [
        ['slug' => 'all', 'name' => 'All Categories', 'icon' => '🛍️'],
        ['slug' => 'electronics', 'name' => 'Electronics & Gadgets', 'icon' => '💻'],
        ['slug' => 'appliances', 'name' => 'Home Appliances', 'icon' => '⚡'],
        ['slug' => 'fashion', 'name' => 'Men\'s Fashion', 'icon' => '👔'],
        ['slug' => 'women', 'name' => 'Women\'s Fashion', 'icon' => '👗'],
        ['slug' => 'beauty', 'name' => 'Health & Beauty', 'icon' => '💄'],
        ['slug' => 'sports', 'name' => 'Sports & Outdoors', 'icon' => '⚽'],
        ['slug' => 'babies', 'name' => 'Babies & Toys', 'icon' => '🧸'],
        ['slug' => 'automotive', 'name' => 'Automotive & Motorbike', 'icon' => '🚗'],
        ['slug' => 'stationery', 'name' => 'Stationery & Crafts', 'icon' => '📚'],
    ];

    /**
     * Sample catalog of fair-trade artisan and community products.
     */
    protected array $products = [
        [
            'id' => 1,
            'slug' => 'handwoven-chakma-waistcoat',
            'name' => 'Handwoven Indigenous Pinon Waistcoat',
            'category' => 'fashion',
            'category_name' => 'Men\'s Fashion',
            'price' => 1850,
            'old_price' => 2200,
            'discount' => '16%',
            'rating' => 4.9,
            'reviews_count' => 128,
            'sold_count' => 342,
            'artisan' => 'Rangamati Women Weavers Collective',
            'region' => 'Chittagong Hill Tracts',
            'image' => 'https://images.unsplash.com/photo-1544816155-12df9643f363?auto=format&fit=crop&w=800&q=80',
            'short_desc' => 'Traditional hand-loomed indigenous waistcoat made from 100% natural dyed organic cotton by indigenous women peacebuilders.',
            'description' => 'Each waistcoat is woven over 14 days using backstrap looms by indigenous women peacebuilders in Rangamati. Using plant-based indigo and madder root dyes, the intricate patterns symbolize inter-community harmony. 100% of proceeds go directly to the weavers cooperative to fund village girls\' secondary education scholarships.',
            'stock' => 18,
            'sku' => 'WF-TEX-001',
            'materials' => '100% Organic Cotton, Natural Herbal Dyes, Wooden Hand-carved Buttons',
            'impact' => 'Supports 32 indigenous female artisans with fair living wages.',
        ],
        [
            'id' => 2,
            'slug' => 'participatory-peace-photo-book',
            'name' => 'Eyes of the River: Photo Essay Book',
            'category' => 'stationery',
            'category_name' => 'Stationery & Crafts',
            'price' => 1200,
            'old_price' => 1500,
            'discount' => '20%',
            'rating' => 4.8,
            'reviews_count' => 94,
            'sold_count' => 210,
            'artisan' => 'Witness Participatory Media Lab',
            'region' => 'Cox\'s Bazar & Dhaka',
            'image' => 'https://images.unsplash.com/photo-1544716278-ca5e3f4abd8c?auto=format&fit=crop&w=800&q=80',
            'short_desc' => 'Hardcover 140-page photography book shot entirely by 24 refugee and host community youth documentarians.',
            'description' => 'A groundbreaking hardcover collection compiling over 110 candid photographs and personal memoirs created by young refugees and local host community fellows. Printed on FSC-certified sustainable art paper with dual English and Bengali commentaries.',
            'stock' => 45,
            'sku' => 'WF-MED-002',
            'materials' => 'FSC Certified Recycled Paper, Hardcover Linen Spine, Vegetable-based Inks',
            'impact' => 'Directly funds camera gear and equipment for rural youth media fellows.',
        ],
        [
            'id' => 3,
            'slug' => 'recycled-jute-peace-tote',
            'name' => 'Hand-Embroidered Natural Jute Tote Bag',
            'category' => 'women',
            'category_name' => 'Women\'s Fashion',
            'price' => 650,
            'old_price' => 850,
            'discount' => '24%',
            'rating' => 5.0,
            'reviews_count' => 215,
            'sold_count' => 580,
            'artisan' => 'Jamalpur Returnee Migrant Guild',
            'region' => 'Jamalpur Hub',
            'image' => 'https://images.unsplash.com/photo-1597633425046-08f5110420b5?auto=format&fit=crop&w=800&q=80',
            'short_desc' => 'Durable eco-friendly jute bag embroidered with traditional Nakshi Kantha peace motifs, crafted by returnee female migrant workers.',
            'description' => 'Made from 100% golden jute sourced from local farmers and hand-stitched by female workers who returned from overseas employment. Each bag provides sustainable local income and features a reinforced cotton interior pocket with water-resistant lining.',
            'stock' => 60,
            'sku' => 'WF-ACC-003',
            'materials' => '100% Golden Jute, Cotton Lining, Brass Zipper',
            'impact' => 'Provides debt-free economic independence to 19 returnee female migrant workers.',
        ],
        [
            'id' => 4,
            'slug' => 'terracotta-peace-candle-lantern',
            'name' => 'Handcrafted Terracotta Peace Lantern',
            'category' => 'appliances',
            'category_name' => 'Home Appliances',
            'price' => 850,
            'old_price' => 1050,
            'discount' => '19%',
            'rating' => 4.7,
            'reviews_count' => 76,
            'sold_count' => 140,
            'artisan' => 'Dhamrai Master Clay Artisans',
            'region' => 'Dhaka District',
            'image' => 'https://images.unsplash.com/photo-1513519245088-0e12902e5a38?auto=format&fit=crop&w=800&q=80',
            'short_desc' => 'Wheel-thrown and kiln-fired natural clay lantern carved with intricate geometric peace patterns, casting warm illumination.',
            'description' => 'Crafted by multi-generational clay potters keeping endangered Bengal terracotta craftsmanship alive. The latticework carvings cast calming geometric silhouettes when illuminated with tea lights or candles.',
            'stock' => 24,
            'sku' => 'WF-DEC-004',
            'materials' => 'Riverbank Clay, Natural Mineral Wash, Kiln Fired at 900°C',
            'impact' => 'Sustains a 200-year-old traditional potter village community.',
        ],
        [
            'id' => 5,
            'slug' => 'witness-foundation-official-hoodie',
            'name' => 'Witness "Peace Begins With Me" Hoodie',
            'category' => 'fashion',
            'category_name' => 'Men\'s Fashion',
            'price' => 1450,
            'old_price' => 1750,
            'discount' => '17%',
            'rating' => 4.9,
            'reviews_count' => 189,
            'sold_count' => 460,
            'artisan' => 'Fair-Trade Garments Unit',
            'region' => 'Gazipur Hub',
            'image' => 'https://images.unsplash.com/photo-1556905055-8f358a7a47b2?auto=format&fit=crop&w=800&q=80',
            'short_desc' => 'Premium heavyweight 340 GSM 100% organic cotton hoodie with subtle embroidered orange brand emblem.',
            'description' => 'Our flagship official community apparel. Crafted under verified fair-trade certified working conditions with living wages and health coverage for factory artisans. Breathable, durable fleece with double-lined hood.',
            'stock' => 35,
            'sku' => 'WF-APP-005',
            'materials' => '340 GSM 100% Organic Combed Cotton, Ribbed Cuffs, Embroidered Stitching',
            'impact' => '100% of profit directly funds Witness community dialogue sessions.',
        ],
        [
            'id' => 6,
            'slug' => 'heritage-hand-stitched-nakshi-kantha',
            'name' => 'Heritage Hand-Stitched Nakshi Kantha Quilt',
            'category' => 'women',
            'category_name' => 'Women\'s Fashion',
            'price' => 3600,
            'old_price' => 4200,
            'discount' => '14%',
            'rating' => 5.0,
            'reviews_count' => 52,
            'sold_count' => 95,
            'artisan' => 'Jessore Peace Quilting Circle',
            'region' => 'Southwestern Hub',
            'image' => 'https://images.unsplash.com/photo-1606744837616-56c9a5c6a6eb?auto=format&fit=crop&w=800&q=80',
            'short_desc' => 'Three months of meticulous hand-stitching by village elders passing down folklore patterns and providing vital livelihoods.',
            'description' => 'A museum-quality quilt combining upcycled vintage cotton saris with tight running stitches. Features traditional floral and bird motifs celebrating peaceful coexistence and maternal heritage.',
            'stock' => 8,
            'sku' => 'WF-TEX-006',
            'materials' => 'Layers of Recycled Vintage Cotton, Pure Cotton Embroidery Floss',
            'impact' => 'Supports elderly female village artisans with direct dignified pension-like income.',
        ],
        [
            'id' => 7,
            'slug' => 'wireless-ergonomic-gaming-mouse',
            'name' => 'RGB Optical Gaming Mouse 3200 DPI',
            'category' => 'electronics',
            'category_name' => 'Electronics & Gadgets',
            'price' => 750,
            'old_price' => 1100,
            'discount' => '32%',
            'rating' => 4.6,
            'reviews_count' => 312,
            'sold_count' => 820,
            'artisan' => 'Witness Digital Safety Lab Partner',
            'region' => 'Dhaka Hub',
            'image' => 'https://images.unsplash.com/photo-1615663245857-ac93bb7c39e7?auto=format&fit=crop&w=800&q=80',
            'short_desc' => 'High precision optical sensor with ergonomic thumb grip and programmable RGB breathing lights.',
            'description' => 'Tested for long hours of coding, streaming, and creative media editing in our community computer literacy centers. Features durable Omron micro-switches rated for 20 million clicks.',
            'stock' => 40,
            'sku' => 'WF-ELE-007',
            'materials' => 'Matte ABS Polymer, Braided Nylon Cable, Gold-plated USB',
            'impact' => 'Subsidizes community digital learning centers for underprivileged students.',
        ],
        [
            'id' => 8,
            'slug' => 'stainless-electric-cordless-kettle',
            'name' => 'Double-Wall Stainless Steel Electric Kettle 1.8L',
            'category' => 'appliances',
            'category_name' => 'Home Appliances',
            'price' => 1350,
            'old_price' => 1750,
            'discount' => '23%',
            'rating' => 4.8,
            'reviews_count' => 143,
            'sold_count' => 410,
            'artisan' => 'Eco-Living Hub',
            'region' => 'Dhaka Division',
            'image' => 'https://images.unsplash.com/photo-1594213114663-d94db9b17125?auto=format&fit=crop&w=800&q=80',
            'short_desc' => 'Fast-boiling 1500W electric kettle with auto shut-off, boil-dry protection and cool-touch outer shell.',
            'description' => 'Energy-efficient food-grade 304 stainless steel interior ensures pure taste with zero plastic contact. Ideal for village community offices, clinics, and family kitchens.',
            'stock' => 28,
            'sku' => 'WF-APP-008',
            'materials' => '304 Food Grade Stainless Steel, BPA-free Cool Touch Body',
            'impact' => 'Supports green energy and community kitchen electrification initiatives.',
        ],
        [
            'id' => 9,
            'slug' => 'professional-ionic-hair-dryer',
            'name' => 'Salon Ionic Hair Dryer with Diffuser Nozzle 2000W',
            'category' => 'beauty',
            'category_name' => 'Health & Beauty',
            'price' => 1650,
            'old_price' => 2250,
            'discount' => '27%',
            'rating' => 4.7,
            'reviews_count' => 98,
            'sold_count' => 280,
            'artisan' => 'Women Vocational Training Center',
            'region' => 'Chittagong Hub',
            'image' => 'https://images.unsplash.com/photo-1522337360788-8b13dee7a37e?auto=format&fit=crop&w=800&q=80',
            'short_desc' => 'High-velocity airflow with negative ionic conditioning to eliminate frizz and lock in natural moisture.',
            'description' => 'Equipped with 3 heat settings, 2 speed levels, and a cool shot button. Certified safe with overheating protection for both home and professional salon usage.',
            'stock' => 22,
            'sku' => 'WF-BEA-009',
            'materials' => 'High-Grade Thermoplastic, Ceramic Tourmaline Heating Coil',
            'impact' => 'Funds free vocational cosmetology courses for young rural women.',
        ],
        [
            'id' => 10,
            'slug' => 'adjustable-dumbbell-fitness-set',
            'name' => 'Home Fitness Dumbbell & Push-Up Training Set',
            'category' => 'sports',
            'category_name' => 'Sports & Outdoors',
            'price' => 2100,
            'old_price' => 2800,
            'discount' => '25%',
            'rating' => 4.9,
            'reviews_count' => 167,
            'sold_count' => 390,
            'artisan' => 'Youth Sports Cohesion Project',
            'region' => 'Cox\'s Bazar',
            'image' => 'https://images.unsplash.com/photo-1584735935682-2f2b69dff9d2?auto=format&fit=crop&w=800&q=80',
            'short_desc' => 'Non-slip grip electroplated dumbbell set designed for strength training, calisthenics, and home workouts.',
            'description' => 'Robust compact cast iron construction encased in shock-absorbing protective rubber coating to protect home floors and minimize noise.',
            'stock' => 15,
            'sku' => 'WF-SPO-010',
            'materials' => 'Cast Iron Core, Eco-friendly Rubber Sheath, Knurled Chrome Grip',
            'impact' => 'Funds youth sports tournaments promoting inter-communal harmony.',
        ],
        [
            'id' => 11,
            'slug' => 'ergonomic-baby-stroller-pram',
            'name' => 'Lightweight Foldable Baby Stroller with Sun Canopy',
            'category' => 'babies',
            'category_name' => 'Babies & Toys',
            'price' => 4200,
            'old_price' => 5500,
            'discount' => '24%',
            'rating' => 4.9,
            'reviews_count' => 84,
            'sold_count' => 175,
            'artisan' => 'Maternal Healthcare Collective',
            'region' => 'Dhaka Division',
            'image' => 'https://images.unsplash.com/photo-1591088398332-8a7791972843?auto=format&fit=crop&w=800&q=80',
            'short_desc' => 'One-hand compact folding stroller with multi-position reclining seat and 5-point safety harness.',
            'description' => 'Engineered for smooth shock absorption over city sidewalks and village paths. Includes UV50+ expandable canopy, large shopping basket, and breathable anti-microbial fabric padding.',
            'stock' => 12,
            'sku' => 'WF-BAB-011',
            'materials' => 'Aerospace Aluminum Alloy, Oxford Waterproof Linen, EVA Shock Wheels',
            'impact' => 'Subsidizes maternal nutrition kits in remote riverine char islands.',
        ],
        [
            'id' => 12,
            'slug' => 'car-high-power-vacuum-cleaner',
            'name' => 'Portable 120W High Power Handheld Car Vacuum',
            'category' => 'automotive',
            'category_name' => 'Automotive & Motorbike',
            'price' => 950,
            'old_price' => 1400,
            'discount' => '32%',
            'rating' => 4.6,
            'reviews_count' => 205,
            'sold_count' => 610,
            'artisan' => 'Migrant Tech Reintegration Hub',
            'region' => 'Comilla Hub',
            'image' => 'https://images.unsplash.com/photo-1520340356584-f9917d1eea6f?auto=format&fit=crop&w=800&q=80',
            'short_desc' => 'Wet and dry cyclonic car cleaner with washable HEPA filter and 4.5m power cord for 12V vehicle socket.',
            'description' => 'Deep suction power of 6000PA cleans dust, pet hair, and debris with ease. Comes with extension hose, crevice nozzle, and brush attachment.',
            'stock' => 32,
            'sku' => 'WF-AUT-012',
            'materials' => 'High Impact Polycarbonate, Copper Turbine Motor, Washable HEPA',
            'impact' => 'Assists returnee migrant drivers with vehicle maintenance tools.',
        ],
    ];

    /**
     * Display the e-commerce catalog page.
     */
    public function index(Request $request): View
    {
        $category = $request->query('category', 'all');
        $search = $request->query('q', '');

        $allProducts = collect($this->products);

        $filteredProducts = $allProducts;

        if ($category && $category !== 'all') {
            $filteredProducts = $filteredProducts->where('category', $category);
        }

        if ($search) {
            $filteredProducts = $filteredProducts->filter(function ($item) use ($search) {
                return str_contains(strtolower($item['name']), strtolower($search)) ||
                       str_contains(strtolower($item['description']), strtolower($search)) ||
                       str_contains(strtolower($item['category_name']), strtolower($search)) ||
                       str_contains(strtolower($item['artisan']), strtolower($search));
            });
        }

        // Flash sale items (first 5 with highest discount)
        $flashSales = $allProducts->take(5);

        // Grouped products by category for store-front layout
        $electronics = $allProducts->where('category', 'electronics')->values();
        $appliances = $allProducts->where('category', 'appliances')->values();
        $fashion = $allProducts->where('category', 'fashion')->values();
        $beauty = $allProducts->where('category', 'beauty')->values();
        $women = $allProducts->where('category', 'women')->values();
        $sports = $allProducts->where('category', 'sports')->values();
        $babies = $allProducts->where('category', 'babies')->values();
        $automotive = $allProducts->where('category', 'automotive')->values();
        $stationery = $allProducts->where('category', 'stationery')->values();

        return view('frontend.shop.index', [
            'products' => $filteredProducts->values()->all(),
            'flashSales' => $flashSales,
            'electronics' => $electronics,
            'appliances' => $appliances,
            'fashion' => $fashion,
            'beauty' => $beauty,
            'women' => $women,
            'sports' => $sports,
            'babies' => $babies,
            'automotive' => $automotive,
            'stationery' => $stationery,
            'categories' => $this->categories,
            'currentCategory' => $category,
            'search' => $search,
            'totalCount' => count($this->products),
        ]);
    }

    /**
     * Display a specific product details page.
     */
    public function show(string $slug): View
    {
        $product = collect($this->products)->firstWhere('slug', $slug);

        if (!$product) {
            $product = $this->products[0];
        }

        $relatedProducts = collect($this->products)
            ->where('id', '!==', $product['id'])
            ->take(3)
            ->values()
            ->all();

        return view('frontend.shop.show', [
            'product' => $product,
            'relatedProducts' => $relatedProducts,
        ]);
    }

    /**
     * Display the checkout page.
     */
    public function checkout(Request $request): View
    {
        $slug = $request->query('item', 'handwoven-chakma-waistcoat');
        $qty = max(1, (int) $request->query('qty', 1));

        $product = collect($this->products)->firstWhere('slug', $slug) ?? $this->products[0];

        $subtotal = $product['price'] * $qty;
        $shipping = 100; // 100 BDT nationwide flat rate
        $total = $subtotal + $shipping;

        return view('frontend.shop.checkout', [
            'product' => $product,
            'qty' => $qty,
            'subtotal' => $subtotal,
            'shipping' => $shipping,
            'total' => $total,
        ]);
    }

    /**
     * Process checkout submission and render success view.
     */
    public function processCheckout(Request $request): View
    {
        $validated = $request->validate([
            'name' => 'nullable|string|max:120',
            'phone' => 'nullable|string|max:20',
            'address' => 'nullable|string|max:300',
            'city' => 'nullable|string|max:50',
            'payment_method' => 'nullable|string|max:30',
            'product_name' => 'nullable|string',
            'qty' => 'nullable|integer',
            'total' => 'nullable|numeric',
        ]);

        $orderNumber = 'WF-' . strtoupper(bin2hex(random_bytes(3)));

        return view('frontend.shop.success', [
            'orderNumber' => $orderNumber,
            'customerName' => $validated['name'] ?? 'Valued Supporter',
            'phone' => $validated['phone'] ?? '+880 1700 000000',
            'address' => $validated['address'] ?? 'Dhaka, Bangladesh',
            'productName' => $validated['product_name'] ?? 'Fair-Trade Artisan Item',
            'qty' => $validated['qty'] ?? 1,
            'total' => $validated['total'] ?? 1950,
            'paymentMethod' => $validated['payment_method'] ?? 'Cash on Delivery',
        ]);
    }
}
