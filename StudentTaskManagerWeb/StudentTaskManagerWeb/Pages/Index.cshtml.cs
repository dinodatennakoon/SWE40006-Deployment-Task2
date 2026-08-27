using Microsoft.AspNetCore.Mvc;
using Microsoft.AspNetCore.Mvc.RazorPages;

namespace StudentTaskManagerWeb.Pages
{
    public class IndexModel : PageModel
    {
        private static List<string> tasks = new List<string>();

        [BindProperty]
        public string NewTask { get; set; } = "";

        public List<string> Tasks => tasks;

        public string AppMessage { get; set; } = "";

        public void OnGet()
        {
            AppMessage = Environment.GetEnvironmentVariable("APP_MESSAGE")
                ?? "Running locally";
        }

        public IActionResult OnPostAdd()
        {
            if (!string.IsNullOrWhiteSpace(NewTask))
            {
                tasks.Add(NewTask);
            }

            return RedirectToPage();
        }

        public IActionResult OnPostDelete(int index)
        {
            if (index >= 0 && index < tasks.Count)
            {
                tasks.RemoveAt(index);
            }

            return RedirectToPage();
        }

        public IActionResult OnPostClear()
        {
            tasks.Clear();

            return RedirectToPage();
        }
    }
}