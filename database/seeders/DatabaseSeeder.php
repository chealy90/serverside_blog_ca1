<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        Post::create([
            'title' => "Metallica - A Masterclass in Metal",
            'slug' => "test",
            'description' => "If you haven’t seen Metallica live, you haven’t truly felt metal. From the moment Ecstasy of Gold rang out through the arena, a surge of anticipation swept over the crowd like a tidal wave. Then—boom. The first thunderous notes of Whiplash exploded from the speakers, and chaos erupted. 
                                James Hetfield’s signature growl cut through the madness as Kirk Hammett’s solos soared, precise yet wild. The entire arena moved as one, a sea of voices screaming along to Master of Puppets, fists raised in defiance. Then came Nothing Else Matters, a rare, almost tender moment, as thousands swayed, lost in its melody. But the true highlight? One. The strobe lights flickered, the gunfire-like drums hammered away, and for a few minutes, it felt like we were on a battlefield.
                            By the time the final chords of Seek & Destroy rang out, I was drained, my voice hoarse, my body aching—but I knew I had just witnessed something legendary. Metallica isn’t just a band; they’re an institution.",
            'image_path' => "https://th.bing.com/th/id/OIP.mQxXhY5TARI5p-0H5YfbEAHaEN?rs=1&pid=ImgDetMain",
            'user_id' => 1
        ]);


        Post::create([
            'title' => "Tool - A Trippy, Mindbending Journey",
            'slug' => "test",
            'description' => "A Tool concert isn’t about spectacle—it’s about immersion. No pyrotechnics, no hype speeches. Just music that swallows you whole.
                            As Fear Inoculum began, a slow, creeping pulse took hold. Maynard James Keenan remained a shadowy figure, never seeking the spotlight, his voice haunting and hypnotic. Danny Carey’s drumming wasn’t just rhythm—it was ritual, shifting time signatures like the earth cracking beneath our feet. Schism and Forty-Six & 2 felt like living, breathing organisms, expanding and contracting with the energy of the crowd.
                            Then came Lateralus. A sonic transcendence. The visuals behind the band weren’t just lights—they were portals, pulling us into some deeper, hidden dimension. And when Stinkfist closed the night, it felt less like an ending and more like waking up from a lucid dream.
                            Tool doesn’t put on concerts. They conduct experiments on your consciousness. And I was more than willing to be the test subject.",
            'image_path' => "https://th.bing.com/th/id/OIP.PxazC798tiW8iC9XxU-XVAHaEs?rs=1&pid=ImgDetMain",
            'user_id' => 1
        ]);

        Post::create([
            'title' => "Test 1",
            'slug' => "test",
            'description' => "This is a description for test 1",
            'image_path' => "https://ih1.redbubble.net/image.2595320116.9420/flat,750x,075,f-pad,750x1000,f8f8f8.jpg",
            'user_id' => 1
        ]);

        Post::create([
            'title' => "Iron Maiden: A Metal Opera Like No Other ",
            'slug' => 'test',
            'description' => 'Seeing Iron Maiden live isn’t just a concert—it’s a journey through time and legend. The moment Aces High roared through the speakers, a fighter plane swooped onto the stage, and Bruce Dickinson charged forward like a warrior, belting out vocals with impossible power.
                                The crowd was a sea of Maiden shirts, fists raised, chanting every lyric like it was gospel. Steve Harris’ galloping basslines drove The Trooper like a battle cry, while Fear of the Dark had the entire arena singing in eerie unison. And then there was Eddie—the colossal, snarling beast, towering over the band, changing forms throughout the set like some kind of metal shapeshifter.
                                When the final notes of The Number of the Beast rang out, I realized Iron Maiden isn’t just a band—they’re mythmakers, masters of spectacle, and architects of metal’s greatest anthems. If you haven’t seen them live, you haven’t truly lived.',
        
            'image_path' => 'https://th.bing.com/th/id/OIP.hGZ5AtxAfsSPQf16bV2rlwHaE8?rs=1&pid=ImgDetMain',
            'user_id' => 1
        ]);
    }
}
