<?php
namespace Thunder\BlizzardApi\Entity\Diablo3;

class Skill
    {
    private $slug;
    private $name;
    private $icon;
    private $level;
    private $categorySlug;
    private $tooltipUrl;
    private $description;
    private $simpleDescription;
    private $skillCalcId;
    private $rune;

    public function __construct($slug, $name, $icon, $level, $categorySlug,
                                $tooltipUrl, $description, $simpleDescription,
                                $skillCalcId, SkillRune $rune)
        {
        $this->slug = $slug;
        $this->name = $name;
        $this->icon = $icon;
        $this->level = $level;
        $this->categorySlug = $categorySlug;
        $this->tooltipUrl = $tooltipUrl;
        $this->description = $description;
        $this->simpleDescription = $simpleDescription;
        $this->skillCalcId = $skillCalcId;
        $this->rune = $rune;
        }
    }
