<?php
/**
 * Created by PhpStorm.
 * User: UC8456
 * Date: 17.01.2017
 * Time: 16:39
 */
namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity
 * @ORM\Table(name="tl_user")
 */
class User
{
    /**
     * @ORM\Column(type="integer", length=10)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    /**
     * @ORM\Column(type="string", length=64)
     */
    private $username;

    /**
     * @ORM\Column(type="integer", length=10)
     */
    private $tstamp;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=5)
     */
    private $language;

    /**
     * @ORM\Column(type="string", length=32)
     */
    private $backendtheme;

    /**
     * @ORM\Column(type="string", length=32)
     */
    private $uploader;

    /**
     * @ORM\Column(type="string", length=1, options={"fixed" = true})
     */
    private $showhelp;

    /**
     * @ORM\Column(type="string", length=1, options={"fixed" = true})
     */
    private $thumbnails;

    /**
     * @ORM\Column(type="string", length=1, options={"fixed" = true})
     */
    private $userte;

    /**
     * @ORM\Column(type="string", length=1, options={"fixed" = true})
     */
    private $usece;

    /**
     * @ORM\Column(type="string", length=128)
     */
    private $password;

    /**
     * @ORM\Column(type="string", length=1, options={"fixed" = true})
     */
    private $pwchange;

    /**
     * @ORM\Column(type="string", length=1, options={"fixed" = true})
     */
    private $admin;

    /**
     * @ORM\Column(type="blob")
     */
    private $groups;

    /**
     * @ORM\Column(type="string", length=12)
     */
    private $inherit;

    /**
     * @ORM\Column(type="blob")
     */
    private $modules;

    /**
     * @ORM\Column(type="blob")
     */
    private $themes;

    /**
     * @ORM\Column(type="blob")
     */
    private $pagemounts;

    /**
     * @ORM\Column(type="blob")
     */
    private $alpty;

    /**
     * @ORM\Column(type="blob")
     */
    private $filemounts;

    /**
     * @ORM\Column(type="blob")
     */
    private $fop;

    /**
     * @ORM\Column(type="blob")
     */
    private $forms;

    /**
     * @ORM\Column(type="blob")
     */
    private $formp;

    /**
     * @ORM\Column(type="string", length=1, options={"fixed" = true})
     */
    private $disable;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $start;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $stop;

    /**
     * @ORM\Column(type="blob")
     */
    private $session;

    /**
     * @ORM\Column(type="integer", length=10)
     */
    private $dateadded;

    /**
     * @ORM\Column(type="integer", length=10)
     */
    private $lastlogin;

    /**
     * @ORM\Column(type="integer", length=10)
     */
    private $currentlogin;


    /**
     * @ORM\Column(type="smallint", length=5)
     */
    private $logincount;

    /**
     * @ORM\Column(type="integer", length=10)
     */
    private $locked;

    /**
     * @ORM\Column(type="blob")
     */
    private $calendars;   /**
 * @ORM\Column(type="blob")
 */
    private $calendarp;   /**
 * @ORM\Column(type="blob")
 */
    private $calendarfeeds;   /**
 * @ORM\Column(type="blob")
 */
    private $calendarfeedp;   /**
 * @ORM\Column(type="blob")
 */
    private $faqs;   /**
 * @ORM\Column(type="blob")
 */
    private $faqp;   /**
 * @ORM\Column(type="blob")
 */
    private $news;   /**
 * @ORM\Column(type="blob")
 */
    private $newp;   /**
 * @ORM\Column(type="blob")
 */
    private $newsfeeds;   /**
 * @ORM\Column(type="blob")
 */
    private $newsfeedp;   /**
 * @ORM\Column(type="blob")
 */
    private $newsletters;   /**
 * @ORM\Column(type="binary", length=16)
 */
    private $avatar;



   

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set username
     *
     * @param string $username
     *
     * @return User
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set tstamp
     *
     * @param integer $tstamp
     *
     * @return User
     */
    public function setTstamp($tstamp)
    {
        $this->tstamp = $tstamp;

        return $this;
    }

    /**
     * Get tstamp
     *
     * @return integer
     */
    public function getTstamp()
    {
        return $this->tstamp;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return User
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return User
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set language
     *
     * @param string $language
     *
     * @return User
     */
    public function setLanguage($language)
    {
        $this->language = $language;

        return $this;
    }

    /**
     * Get language
     *
     * @return string
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Set backendtheme
     *
     * @param string $backendtheme
     *
     * @return User
     */
    public function setBackendtheme($backendtheme)
    {
        $this->backendtheme = $backendtheme;

        return $this;
    }

    /**
     * Get backendtheme
     *
     * @return string
     */
    public function getBackendtheme()
    {
        return $this->backendtheme;
    }

    /**
     * Set uploader
     *
     * @param string $uploader
     *
     * @return User
     */
    public function setUploader($uploader)
    {
        $this->uploader = $uploader;

        return $this;
    }

    /**
     * Get uploader
     *
     * @return string
     */
    public function getUploader()
    {
        return $this->uploader;
    }

    /**
     * Set showhelp
     *
     * @param string $showhelp
     *
     * @return User
     */
    public function setShowhelp($showhelp)
    {
        $this->showhelp = $showhelp;

        return $this;
    }

    /**
     * Get showhelp
     *
     * @return string
     */
    public function getShowhelp()
    {
        return $this->showhelp;
    }

    /**
     * Set thumbnails
     *
     * @param string $thumbnails
     *
     * @return User
     */
    public function setThumbnails($thumbnails)
    {
        $this->thumbnails = $thumbnails;

        return $this;
    }

    /**
     * Get thumbnails
     *
     * @return string
     */
    public function getThumbnails()
    {
        return $this->thumbnails;
    }

    /**
     * Set userte
     *
     * @param string $userte
     *
     * @return User
     */
    public function setUserte($userte)
    {
        $this->userte = $userte;

        return $this;
    }

    /**
     * Get userte
     *
     * @return string
     */
    public function getUserte()
    {
        return $this->userte;
    }

    /**
     * Set usece
     *
     * @param string $usece
     *
     * @return User
     */
    public function setUsece($usece)
    {
        $this->usece = $usece;

        return $this;
    }

    /**
     * Get usece
     *
     * @return string
     */
    public function getUsece()
    {
        return $this->usece;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return User
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set pwchange
     *
     * @param string $pwchange
     *
     * @return User
     */
    public function setPwchange($pwchange)
    {
        $this->pwchange = $pwchange;

        return $this;
    }

    /**
     * Get pwchange
     *
     * @return string
     */
    public function getPwchange()
    {
        return $this->pwchange;
    }

    /**
     * Set admin
     *
     * @param string $admin
     *
     * @return User
     */
    public function setAdmin($admin)
    {
        $this->admin = $admin;

        return $this;
    }

    /**
     * Get admin
     *
     * @return string
     */
    public function getAdmin()
    {
        return $this->admin;
    }

    /**
     * Set groups
     *
     * @param string $groups
     *
     * @return User
     */
    public function setGroups($groups)
    {
        $this->groups = $groups;

        return $this;
    }

    /**
     * Get groups
     *
     * @return string
     */
    public function getGroups()
    {
        return $this->groups;
    }

    /**
     * Set inherit
     *
     * @param string $inherit
     *
     * @return User
     */
    public function setInherit($inherit)
    {
        $this->inherit = $inherit;

        return $this;
    }

    /**
     * Get inherit
     *
     * @return string
     */
    public function getInherit()
    {
        return $this->inherit;
    }

    /**
     * Set modules
     *
     * @param string $modules
     *
     * @return User
     */
    public function setModules($modules)
    {
        $this->modules = $modules;

        return $this;
    }

    /**
     * Get modules
     *
     * @return string
     */
    public function getModules()
    {
        return $this->modules;
    }

    /**
     * Set themes
     *
     * @param string $themes
     *
     * @return User
     */
    public function setThemes($themes)
    {
        $this->themes = $themes;

        return $this;
    }

    /**
     * Get themes
     *
     * @return string
     */
    public function getThemes()
    {
        return $this->themes;
    }

    /**
     * Set pagemounts
     *
     * @param string $pagemounts
     *
     * @return User
     */
    public function setPagemounts($pagemounts)
    {
        $this->pagemounts = $pagemounts;

        return $this;
    }

    /**
     * Get pagemounts
     *
     * @return string
     */
    public function getPagemounts()
    {
        return $this->pagemounts;
    }

    /**
     * Set alpty
     *
     * @param string $alpty
     *
     * @return User
     */
    public function setAlpty($alpty)
    {
        $this->alpty = $alpty;

        return $this;
    }

    /**
     * Get alpty
     *
     * @return string
     */
    public function getAlpty()
    {
        return $this->alpty;
    }

    /**
     * Set filemounts
     *
     * @param string $filemounts
     *
     * @return User
     */
    public function setFilemounts($filemounts)
    {
        $this->filemounts = $filemounts;

        return $this;
    }

    /**
     * Get filemounts
     *
     * @return string
     */
    public function getFilemounts()
    {
        return $this->filemounts;
    }

    /**
     * Set fop
     *
     * @param string $fop
     *
     * @return User
     */
    public function setFop($fop)
    {
        $this->fop = $fop;

        return $this;
    }

    /**
     * Get fop
     *
     * @return string
     */
    public function getFop()
    {
        return $this->fop;
    }

    /**
     * Set forms
     *
     * @param string $forms
     *
     * @return User
     */
    public function setForms($forms)
    {
        $this->forms = $forms;

        return $this;
    }

    /**
     * Get forms
     *
     * @return string
     */
    public function getForms()
    {
        return $this->forms;
    }

    /**
     * Set formp
     *
     * @param string $formp
     *
     * @return User
     */
    public function setFormp($formp)
    {
        $this->formp = $formp;

        return $this;
    }

    /**
     * Get formp
     *
     * @return string
     */
    public function getFormp()
    {
        return $this->formp;
    }

    /**
     * Set disable
     *
     * @param string $disable
     *
     * @return User
     */
    public function setDisable($disable)
    {
        $this->disable = $disable;

        return $this;
    }

    /**
     * Get disable
     *
     * @return string
     */
    public function getDisable()
    {
        return $this->disable;
    }

    /**
     * Set start
     *
     * @param string $start
     *
     * @return User
     */
    public function setStart($start)
    {
        $this->start = $start;

        return $this;
    }

    /**
     * Get start
     *
     * @return string
     */
    public function getStart()
    {
        return $this->start;
    }

    /**
     * Set stop
     *
     * @param string $stop
     *
     * @return User
     */
    public function setStop($stop)
    {
        $this->stop = $stop;

        return $this;
    }

    /**
     * Get stop
     *
     * @return string
     */
    public function getStop()
    {
        return $this->stop;
    }

    /**
     * Set session
     *
     * @param string $session
     *
     * @return User
     */
    public function setSession($session)
    {
        $this->session = $session;

        return $this;
    }

    /**
     * Get session
     *
     * @return string
     */
    public function getSession()
    {
        return $this->session;
    }

    /**
     * Set dateadded
     *
     * @param integer $dateadded
     *
     * @return User
     */
    public function setDateadded($dateadded)
    {
        $this->dateadded = $dateadded;

        return $this;
    }

    /**
     * Get dateadded
     *
     * @return integer
     */
    public function getDateadded()
    {
        return $this->dateadded;
    }

    /**
     * Set lastlogin
     *
     * @param integer $lastlogin
     *
     * @return User
     */
    public function setLastlogin($lastlogin)
    {
        $this->lastlogin = $lastlogin;

        return $this;
    }

    /**
     * Get lastlogin
     *
     * @return integer
     */
    public function getLastlogin()
    {
        return $this->lastlogin;
    }

    /**
     * Set currentlogin
     *
     * @param integer $currentlogin
     *
     * @return User
     */
    public function setCurrentlogin($currentlogin)
    {
        $this->currentlogin = $currentlogin;

        return $this;
    }

    /**
     * Get currentlogin
     *
     * @return integer
     */
    public function getCurrentlogin()
    {
        return $this->currentlogin;
    }

    /**
     * Set logincount
     *
     * @param integer $logincount
     *
     * @return User
     */
    public function setLogincount($logincount)
    {
        $this->logincount = $logincount;

        return $this;
    }

    /**
     * Get logincount
     *
     * @return integer
     */
    public function getLogincount()
    {
        return $this->logincount;
    }

    /**
     * Set locked
     *
     * @param integer $locked
     *
     * @return User
     */
    public function setLocked($locked)
    {
        $this->locked = $locked;

        return $this;
    }

    /**
     * Get locked
     *
     * @return integer
     */
    public function getLocked()
    {
        return $this->locked;
    }

    /**
     * Set calendars
     *
     * @param string $calendars
     *
     * @return User
     */
    public function setCalendars($calendars)
    {
        $this->calendars = $calendars;

        return $this;
    }

    /**
     * Get calendars
     *
     * @return string
     */
    public function getCalendars()
    {
        return $this->calendars;
    }

    /**
     * Set calendarp
     *
     * @param string $calendarp
     *
     * @return User
     */
    public function setCalendarp($calendarp)
    {
        $this->calendarp = $calendarp;

        return $this;
    }

    /**
     * Get calendarp
     *
     * @return string
     */
    public function getCalendarp()
    {
        return $this->calendarp;
    }

    /**
     * Set calendarfeeds
     *
     * @param string $calendarfeeds
     *
     * @return User
     */
    public function setCalendarfeeds($calendarfeeds)
    {
        $this->calendarfeeds = $calendarfeeds;

        return $this;
    }

    /**
     * Get calendarfeeds
     *
     * @return string
     */
    public function getCalendarfeeds()
    {
        return $this->calendarfeeds;
    }

    /**
     * Set calendarfeedp
     *
     * @param string $calendarfeedp
     *
     * @return User
     */
    public function setCalendarfeedp($calendarfeedp)
    {
        $this->calendarfeedp = $calendarfeedp;

        return $this;
    }

    /**
     * Get calendarfeedp
     *
     * @return string
     */
    public function getCalendarfeedp()
    {
        return $this->calendarfeedp;
    }

    /**
     * Set faqs
     *
     * @param string $faqs
     *
     * @return User
     */
    public function setFaqs($faqs)
    {
        $this->faqs = $faqs;

        return $this;
    }

    /**
     * Get faqs
     *
     * @return string
     */
    public function getFaqs()
    {
        return $this->faqs;
    }

    /**
     * Set faqp
     *
     * @param string $faqp
     *
     * @return User
     */
    public function setFaqp($faqp)
    {
        $this->faqp = $faqp;

        return $this;
    }

    /**
     * Get faqp
     *
     * @return string
     */
    public function getFaqp()
    {
        return $this->faqp;
    }

    /**
     * Set news
     *
     * @param string $news
     *
     * @return User
     */
    public function setNews($news)
    {
        $this->news = $news;

        return $this;
    }

    /**
     * Get news
     *
     * @return string
     */
    public function getNews()
    {
        return $this->news;
    }

    /**
     * Set newp
     *
     * @param string $newp
     *
     * @return User
     */
    public function setNewp($newp)
    {
        $this->newp = $newp;

        return $this;
    }

    /**
     * Get newp
     *
     * @return string
     */
    public function getNewp()
    {
        return $this->newp;
    }

    /**
     * Set newsfeeds
     *
     * @param string $newsfeeds
     *
     * @return User
     */
    public function setNewsfeeds($newsfeeds)
    {
        $this->newsfeeds = $newsfeeds;

        return $this;
    }

    /**
     * Get newsfeeds
     *
     * @return string
     */
    public function getNewsfeeds()
    {
        return $this->newsfeeds;
    }

    /**
     * Set newsfeedp
     *
     * @param string $newsfeedp
     *
     * @return User
     */
    public function setNewsfeedp($newsfeedp)
    {
        $this->newsfeedp = $newsfeedp;

        return $this;
    }

    /**
     * Get newsfeedp
     *
     * @return string
     */
    public function getNewsfeedp()
    {
        return $this->newsfeedp;
    }

    /**
     * Set newsletters
     *
     * @param string $newsletters
     *
     * @return User
     */
    public function setNewsletters($newsletters)
    {
        $this->newsletters = $newsletters;

        return $this;
    }

    /**
     * Get newsletters
     *
     * @return string
     */
    public function getNewsletters()
    {
        return $this->newsletters;
    }

    /**
     * Set avatar
     *
     * @param binary $avatar
     *
     * @return User
     */
    public function setAvatar($avatar)
    {
        $this->avatar = $avatar;

        return $this;
    }

    /**
     * Get avatar
     *
     * @return binary
     */
    public function getAvatar()
    {
        return $this->avatar;
    }
}
